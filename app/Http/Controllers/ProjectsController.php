<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    public function show(){
        $projects = Project::all();
        return view('project.index',compact('projects'));
    }
    
    public function store(){
        Project::create(request(['title','description']));
        return redirect('/projects');
    }

}
