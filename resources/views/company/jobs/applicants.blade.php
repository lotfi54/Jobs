@extends('layouts.backend.app')

@section('title','Candidature')

@push('css')

@endpush

@section('content')
  
 


<div class="row">

 
<div class="col-lg-8 mt-5">

          <div class="card">
              @foreach($applicants as $applicant)
              <div class="card-header">
              	   <a href="{{route('job.show',[$applicant->id,$applicant->slug])}}">
              	{{$applicant->title}}</a>
              </div>

              <div class="card-body">
                  <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                     
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">

                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">gender</th>
                                                    <th scope="col">resume</th>
                                                    <th scope="col">coverletter</th>
                                                </tr>
                                            </thead> 
 	@foreach($applicant->users as $user)
                                            <tbody>
                                            	
                                                <tr>
                                                    <th scope="row">{{$user->name}}</th>

                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->profile->phone_number}}</td>
                                                    <td>{{$user->profile->gender}}</td>

                                                    <td><a href="{{Storage::url($user->profile->resume)}}">Resume</a></td>
                                                    
                                                   <td><a href="{{Storage::url($user->profile->cover_letter)}}">Coverletter</a></td>
                                                </tr>
                                              
                                            </tbody> 
                                              @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
           
              @endforeach
          </div>            
                             
</div>


@endsection

@push('js')

@endpush

