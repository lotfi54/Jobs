<?php

namespace App\Http\Controllers\Company;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index () {
 
 		$companies = Company::all();
    	return view('company.dashboard',compact('companies'));
    }


}
