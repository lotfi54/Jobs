<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function saveJob($id){
    	$jobId = Job::find($id); 
    	$jobId->favorite()->attach(auth()->user()->id)
    	return redirect()->back(); 
    }


     public function unSaveJob($id){
    	$jobId = Job::find($id); 
    	$jobId->favorite()->detach(auth()->user()->id)
    	return redirect()->back(); 
    }


}
