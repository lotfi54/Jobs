<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

    $task = Task::all();
    	
    return redirect()->back();
    }
}
