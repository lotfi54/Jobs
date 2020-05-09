<?php

namespace App\Http\Controllers\Seeker;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
   public function index(){
   	$jobs = Auth::user()->favorites;
   	return view('seeker.favoris',compact('jobs')); 
   }
}
