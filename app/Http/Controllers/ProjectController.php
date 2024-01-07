<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Project; // Assuming your Project model is in the App\Models namespace
// use Illuminate\View\View;


// class ProjectController extends Controller
// {
//     public function index(): View
//     {
//         $projects = Project::all();

//         return view('project.index', ['projects' => $projects]);
//     }
// }



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function show($id): View
    {
        // Fetch the project details based on the $id parameter
        $project = Project::find($id);

        // Pass the project details to the view
        return view('projectsdetail', ['project' => $project]);


    }
}


