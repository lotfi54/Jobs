<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Profile;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seeker.profile');
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

          $this->validate($request,[
'lastname'=>'required',
'firstname'=>'required',
            'address'=>'required',
            'bio'=>'required|min:20',
            'experience'=>'required|min:20',
            'phone_number'=>'required|min:10|numeric'
        ]);

        $user_id = auth()->user()->id; 
    Profile::where('user_id',$user_id)->update([

    'firstname'=>request('firstname'),
    'lastname'=>request('lastname'),
    'dob'=>request('dob'),
    'address'=>request('address'),
    'experience'=>request('experience'),
    'bio'=>request('bio'),
    'phone_number'=>request('phone_number')

    ]);

 Toastr::success('Profile mis à jour', 'Success');
return redirect()->route('seeker.profile');
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


    public function coverletter(Request $request) {
         $user_id = auth()->user()->id; 
         $cover = $request->file('cover_letter')->store('public/files');
    Profile::where('user_id',$user_id)->update([

    'cover_letter'=>$cover
   

    ]);

     Toastr::success('Lettre de motivation mise à jour', 'Success');
    return redirect()->route('seeker.profile');

    }

    public function resume(Request $request) {
         $user_id = auth()->user()->id; 
         $resume = $request->file('resume')->store('public/files');
    Profile::where('user_id',$user_id)->update([

    'resume'=>$resume
   

    ]);

     Toastr::success('Le cv à été mis a jour', 'Success');
    return redirect()->route('seeker.profile');

    }



     public function avatar(Request $request){
       $this->validate($request,[
            'avatar'=>'required|mimes:png,jpeg,jpg|max:20000'
        ]);
        $user_id = auth()->user()->id;
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/avatar/',$filename);
            Profile::where('user_id',$user_id)->update([
              'avatar'=>$filename
            ]);

        Toastr::success('le photo de profil à été mise a jour', 'Success');
    return redirect()->route('seeker.profile');
        }
 
   }

}
