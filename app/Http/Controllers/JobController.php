<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



  

    public function index()
    {
       $jobs = Job::latest()->limit(6)->where('status',1)->get(); 

        return view('welcome', ['jobs' => $jobs]);
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
    public function show($id,Job $job)
    {
        // $job=Job::find($id); 

        return view('job.show',compact('job'));
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


 public function apply(Request $request, $id)
    {
        $jobId = Job::find($id); 
        $jobId->users()->attach(Auth::user()->id); 
            Toastr::success('Votre demande à été envoyé', 'Success');
 return redirect()->back()->with('message','Candidature envoyé');
    }



public function allJobs(Request $request){
  //front search
        $search = $request->get('search');
        $address = $request->get('address');
        if($search && $address){
           $jobs = Job::where('position','LIKE','%'.$search.'%')
                    ->orWhere('title','LIKE','%'.$search.'%')
                    ->orWhere('type','LIKE','%'.$search.'%')
                    ->orWhere('address','LIKE','%'.$address.'%')
                    ->paginate(20);

            return view('job.alljobs',compact('jobs'));

        }




       $keyword = $request->get('position');
       $type = $request->get('type');
       $category = $request->get('category_id');
       $address = $request->get('address');
       if($keyword||$type||$category||$address){
        $jobs = Job::where('position','LIKE','%'.$keyword.'%')
                ->orWhere('type',$type)
                ->orWhere('category_id',$category)
                ->orWhere('address',$address)
                ->paginate(10);
                return view('job.alljobs',compact('jobs'));
       }else{

            $jobs = Job::latest()->paginate(10);
            return view('job.alljobs',compact('jobs'));
    }



}

 public function searchJobs(Request $request){
       
        $keyword = $request->get('keyword');
        $users = Job::where('title','like','%'.$keyword.'%')
                ->orWhere('position','like','%'.$keyword.'%')
                ->limit(5)->get();
        return response()->json($users);

    }






}