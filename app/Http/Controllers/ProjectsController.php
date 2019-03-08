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

    public function show(Project $project) //model and variable should be identical
    {

       /*
        * Using of the old method
        *  $projects = Project::findOrFail($id);
        return view('project.show', compact($project));

       */

        return view('projects.show', compact('project'));
    }

    public function store()
    {
      /*  $project = new Project;
        $project->title = Request('title');
        $project->description = Request('description');
        $project->save();
        return redirect('/projects');*/

        Project::create(request(['title' , 'description']));

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        /*$projects = Project::findOrFail($id);
        return view('projects.edit', compact('projects'));*/

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
       /*$project = Project::findOrFail($id);
       $project->title = request()->title;
       $project->description = request()->description;
       $project->save();*/

       $project->update(request(['title' , 'description']));
       return redirect('/projects');

    }

    public function destroy(Project $project)
    {
//        $project = Project::findOrFail($id);

        $project->delete();
        return redirect('/projects');

    }


}
