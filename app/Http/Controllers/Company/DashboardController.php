<?php

namespace App\Http\Controllers\Company;

use App\Company;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index () {
 

		$applicants = Job::all();
     	$jobs = Job::all(); 
 		$companies = Company::all();
    	return view('company.dashboard',compact('companies','jobs','applicants'));
    }


}
