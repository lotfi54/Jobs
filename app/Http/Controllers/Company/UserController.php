<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Company;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct() 
    {
        $this->middleware('api'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.profile');
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
        $user_id = auth()->user()->id; 
    Company::where('user_id',$user_id)->update([

    'cname'=>request('cname'),
    'slogan'=>request('slogan'),
    'address'=>request('address'),
    'phone'=>request('phone'),
    'website'=>request('website'),
    'description'=>request('description')

    ]);

 Toastr::success('Profile mis à jour', 'Success');
return redirect()->route('company.profile');
    }


     public function coverPhoto(Request $request){
        $user_id = auth()->user()->id;
        if($request->hasfile('cover_photo')){

            $file = $request->file('cover_photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/coverphoto/',$filename);
            Company::where('user_id',$user_id)->update([
                'cover_photo'=>$filename
            ]);
        }
       Toastr::success('Profile mis à jour', 'Success');
return redirect()->route('company.profile');

    }

    public function companyLogo(Request $request){
        $user_id = auth()->user()->id;
        if($request->hasfile('company_logo')){

            $file = $request->file('company_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/logo/',$filename);
            Company::where('user_id',$user_id)->update([
                'logo'=>$filename
            ]);
        }
       Toastr::success('Le logo à été mise jour', 'Success');
return redirect()->route('company.profile');

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
