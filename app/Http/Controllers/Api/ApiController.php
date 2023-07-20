<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ApiController extends Controller
{
    public function index() {
        $projects = Project::with("type", "technologies")->paginate(2);

        $response = [
            "success" => true,
            "results" => $projects
        ];

        return response()->json($response);
    }

    public function show($id) {
        $projects = Project::with("type", "technologies")->find($id);
        
        $response = [
            "success" => true,
            "results" => $projects
        ];
    
        return response()->json($response);
    }

}
