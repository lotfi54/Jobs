<?php

namespace App\Http\Controllers\Company;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobPostRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use\App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $jobs = Job::where('user_id',auth()->user()->id)->orderBy('created_at', 'desc')->paginate(6);
       
     
        return view('company.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobPostRequest $request)
    {
       $user_id = auth()->user()->id;
        $company = Company::where('user_id',$user_id)->first();
        $company_id = $company->id;
        Job::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'title'=>request('title'),
            'slug' =>Str::slug(request('title')),
            'description'=>request('description'),
            'roles'=>request('roles'),
            'category_id' =>request('category'),
            'position'=>request('position'),
            'address'=>request('address'),
            'type'=>request('type'),
            'status'=>request('status'),
            'last_date'=>request('last_date')

        ]);

          Toastr::success('Le job à été crée', 'Success');
        return redirect()->route('company.jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


 public function applicant(){
        $applicants = Job::has('users')->where('user_id',auth()->user()->id)->orderBy('last_date', 'desc')->paginate(6);

        return view('company.jobs.applicants',compact('applicants'));
    }
    


    public function edit($id)
    {
        $jobs = Job::findOrFail($id); 
        return view('company.jobs.edit',compact('jobs'));
    }


    public function update(JobPostRequest $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());
        Toastr::success('Le job à été modifié', 'Success');
        return redirect()->route('company.jobs');
    }

   

    public function destroy($id)
    {

         $jobs = Job::find($id);
         $jobs->delete();

        Toastr::success('Le job à été supprimer', 'Success');
        return redirect()->route('company.jobs');
       
    }


}



