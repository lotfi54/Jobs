<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobs/{id}/{job}','JobController@show')->name('jobs.show'); 

 // company 

 Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index'); 

Route::view('employer/register','auth.employer-register')->name('employer.register');

Route::post('employer/register','EmployerRegisterController@employerRegister')->name('emp.register');

// profil

  // Route::get('user/profile','UserProfileController@index'); 


  Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

 
    

   Route::get('profile','userController@index')->name('profile');

  	Route::post('user/profile/create','UserController@store')->name('profile.create');


   

});


    Route::group(['as'=>'company.','prefix'=>'company','namespace'=>'Company','middleware'=>['auth','company']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

   Route::get('profile','userController@index')->name('profile');

   Route::post('user/profile/create','UserController@store')->name('profile.create');

    Route::post('user/profile/coverphoto','UserController@coverPhoto')->name('cover.photo');
    Route::post('user/profile/logo','UserController@companyLogo')->name('company.logo');

   Route::get('jobs','JobController@index')->name('jobs');
   // Route::get('jobs/create','JobController@create')->name('create');


Route::get('user/jobs/create','JobController@create')->name('job.create');
Route::post('user/jobs/store','JobController@store')->name('job.store');

});

        Route::group(['as'=>'seeker.','prefix'=>'seeker','namespace'=>'Seeker','middleware'=>['auth','seeker']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

   Route::get('profile','userController@index')->name('profile');

   Route::post('user/profile/create','UserController@store')->name('profile.create');

   Route::post('user/coverletter','UserController@coverletter')->name('cover.letter');

   Route::post('user/resume','UserController@resume')->name('resume');
   Route::post('user/avatar','UserController@avatar')->name('avatar');
});