@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  

<div class="row">
   <div class="col-md-3">
            @if(empty(Auth::user()->profile->avatar))
            <img src="{{asset('avatar/man.jpg')}}" width="100" style="width: 100%;">
            @else
            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width: 100%;">

            @endif
            <br><br>

            <form action="{{route('seeker.avatar')}}" method="POST" enctype="multipart/form-data">@csrf

            <div class="card">
                <div class="card-header">Update profile picture</div>
                <div class="card-body">
                    <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="avatar">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                              </div>
                    <br>
                    <button class="btn btn-success float-right" type="submit"><span class="ti-import"></span></button>
                    @if($errors->has('avatar'))
                            <div class="error" style="color: red;">{{$errors->first('avatar')}}</div>
                        @endif

                </div>
            </div>
        </form>


        </div>

<div class="col-md-4 mt-3">

<div class="card mt-3">
                <div class="card-header mt-0">Mise à jour du profile</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('seeker.profile.create')}}">
                            @csrf 
                            <div class="form-group">
                                            <label for="nom" class="col-form-label">Nom</label>
                                            <input class="form-control" type="text" placeholder="Nom" name="lastname" value="{{Auth::user()->profile->lastname}}">
                                        </div>

                                        @if($errors->has('lastname'))
                                      <div class="error" style="color: red;">{{$errors->first('lastname')}}</div>
                                       @endif

                                           <div class="form-group">
                                            <label for="Prenom" class="col-form-label">Prenom</label>
                                            <input class="form-control" type="text" placeholder="Prenom" name="firstname" value="{{Auth::user()->Profile->firstname}}" >
                                        </div>

                                           @if($errors->has('firstname'))
                                      <div class="error" style="color: red;">{{$errors->first('firstname')}}</div>
                                       @endif

                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Date de naissance</label>
                                            <input class="form-control" type="date" placeholder="Date de naissance" name="dob" value="{{Auth::user()->Profile->dob }}" >
                                        </div>

                                         <div class="form-group">
                                            <label for="adresse" class="col-form-label">Adresse</label>
                                            <input class="form-control" type="text" placeholder="adresse" name="address" value="{{Auth::user()->Profile->address }}" >
                                        </div>

                                           @if($errors->has('address'))
                                      <div class="error" style="color: red;">{{$errors->first('address')}}</div>
                                       @endif

                                            <div class="form-group">
                                            <label for="phone" class="col-form-label">Numéro de téléphone</label>
                                            <input class="form-control" type="text" placeholder="Numéro de téléphone" name="phone_number" value="{{Auth::user()->Profile->phone_number }}" >
                                        </div>

                                           @if($errors->has('phone_number'))
                                      <div class="error" style="color: red;">{{$errors->first('phone_number')}}</div>
                                       @endif

                                         <div class="form-group">
                                            <label for="experience" class="col-form-label">Experience</label>
                                        <textarea class="form-control" name="experience">
                                          {{ Auth::user()->Profile->experience }}
                                        </textarea>
                                        </div>
                                           @if($errors->has('experience'))
                                      <div class="error" style="color: red;">{{$errors->first('experience')}}</div>
                                       @endif


                                        <div class="form-group">
                                            <label for="bio" class="col-form-label"> </label>
                                        <textarea class="form-control" name="bio">
                                       {{Auth::user()->Profile->bio }}
                                        </textarea>
                                        </div>

                                           @if($errors->has('bio'))
                                      <div class="error" style="color: red;">{{$errors->first('bio')}}</div>
                                       @endif


                <button class="btn btn-success" type="submit">Validé</button>
                    </div>
      
     </div>

     </form>
     
</div>
  <div class="col-lg-4 mt-3">
      <div class="card mt-3">
          <div class="card-header">Profile</div>
          <div class="card-body">
             <p>Status: {{Auth::user()->Role->name }}</p>

@if(!empty(Auth::user()->profile->cover_letter))
<p><span class="ti-export"></span> <a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">Lettre de motivation</a></p>
@else 
<p>Veuillez ajouter une lettre de motivation</p>
@endif

@if(!empty(Auth::user()->profile->resume))
<p><span class="ti-export"></span> <a href="{{Storage::url(Auth::user()->profile->resume)}}">cv</a></p>
@else 
<p>Veuillez ajouter un cv</p>
@endif

          </div>
      </div>
      <form action="{{route('seeker.cover.letter')}}" method="POST" enctype="multipart/form-data">
         @csrf 
      <div class="card mt-5">
          <div class="card-header">Lettre de motivation</div>
          <div class="card-body">
             <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="cover_letter">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit"><span class="ti-import"></span></button>
                                                </div>
                                            </div>
                                                     
          </div>

      </div>
</form>

<form action="{{route('seeker.resume')}}" method="POST" enctype="multipart/form-data">
         @csrf 
      <div class="card mt-3">
          <div class="card-header">CV</div>
          <div class="card-body">
             <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="resume">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit"><span class="ti-import"></button>
                                                </div>
                                            </div>
                                                   
          </div>

      </div>
    </form>
        </div>
      
    </div>

@endsection

@push('js')

@endpush

