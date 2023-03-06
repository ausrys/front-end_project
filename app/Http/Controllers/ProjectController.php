<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    
    public function index() {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }
    public function show($id) {
        $project = Project::findOrFail($id);
        return view('projects.show', ['project' => $project] );
    }
    public function create() {
        return view('projects.create');
    }
    public function store() {
        $project = new Project();
        $project->name = request('pName');
        $project->summary = request('summary');
        if(request('password')=== 'secretPassword') {
            $project->save();
        }
        return redirect('/');
    }
}
