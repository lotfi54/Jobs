<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\Company; 
use Hash; 
use Illuminate\Support\Str;
class EmployerRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employerRegister(Request $request)
    {


 $this->validate($request,[
            'cname'=>'required|string|max:60',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|confirmed'
        ]);



        $user = User::create([
           
            'email' =>request('email'),
            'password' => Hash::make(request('password')), 
            'role_id'=>request('role_id')
        ]);

        Company::create([
            'user_id'=>$user->id,
            'cname'=>request('cname'),
            'slug'=>Str::slug(request('cname'))
        ]);

         $user->sendEmailVerificationNotification();

    

        return redirect()->to('login')->with('message','Please verify your email by clicking the link sent to your email address'); 
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
