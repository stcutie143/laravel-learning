<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller {
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project;
        $project->title = Request('title');
        $project->description = Request('description');
        $project->save();
        return redirect('/projects');
    }

    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view('projects.edit', compact('projects'));
    }

    public function update($id)
    {
       $project = Project::findOrFail($id);
       $project->title = request()->title;
       $project->description = request()->description;
       $project->save();
       return redirect('/projects');

    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/projects');

    }
}
