<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Job;
use Illuminate\Http\Request;

class AllJobController extends Controller
{
    public function index() {
    	 $jobs = Job::all(); 
        return response()->json($jobs);
    }
}
