<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
                        ->with('author')
                        ->latest('published_at')
                        ->paginate(9);

        $featuredPost = BlogPost::published()
                               ->with('author')
                               ->orderBy('views', 'desc')
                               ->first();

        return view('blog.index', compact('posts', 'featuredPost'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
                       ->published()
                       ->with('author')
                       ->firstOrFail();

        $post->incrementViews();

        $relatedPosts = BlogPost::published()
                               ->where('id', '!=', $post->id)
                               ->latest('published_at')
                               ->limit(3)
                               ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
