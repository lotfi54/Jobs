<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jobs = Job::latest()->limit(6)->where('status',1)->get();
       
        $jobs = Job::with(['company','category'])->latest()->where('status',1)->get();
     foreach($jobs as $job) {
         $job->setAttribute('path','/job/'.$job->slug);
     }
        return response()->json($jobs, 200); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        
        return response()->json([
         'id'=>$job->id,
         'title'=>$job->title,
         'human_created_at'=>$job->human_created_at,
         'type'=>$job->type,
         'cname'=>$job->company->cname,
         'address'=>$job->company->address,
         'image'=>$job->company->cover_photo,
         'desc'=>$job->description,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
