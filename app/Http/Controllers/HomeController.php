<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::active()->ordered()->get();
        $projects = Project::active()->ordered()->get();
        $testimonials = Testimonial::active()->ordered()->get();
        $teamMembers = TeamMember::active()->ordered()->get();

        // Get latest 3 published blog posts
        $blogPosts = BlogPost::published()
                            ->with('author')
                            ->latest('published_at')
                            ->limit(3)
                            ->get();

        return view('home', compact('companies', 'projects', 'testimonials', 'teamMembers', 'blogPosts'));
    }
}
