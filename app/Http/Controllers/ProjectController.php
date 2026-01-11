<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)
                         ->active()
                         ->firstOrFail();

        $relatedProjects = Project::active()
                                 ->where('id', '!=', $project->id)
                                 ->ordered()
                                 ->limit(3)
                                 ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }

    public function index()
    {
        $projects = Project::active()->ordered()->paginate(12);
        return view('projects.index', compact('projects'));
    }
}
