@extends('layouts.backend.app')

@section('title','Settings')

@push('css')

@endpush

@section('content')
  

<div class="row">
<div class="col-lg-6 mt-3">
                        
                      {{--     <img src="{{asset('avatar/man.jpg')}}" width="100" alt=""> --}}
                        
<div class="card mt-3">
                <div class="card-header mt-0">Mise à jour du profile</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.profile.create')}}">
                            @csrf 
                       
                            <div class="form-group">
                                            <label for="nom" class="col-form-label">Nom</label>
                                            <input class="form-control" type="text" placeholder="Nom" name="lastname" value="{{Auth::user()->Profile->lastname }}">
                                        </div>

                                           <div class="form-group">
                                            <label for="Prenom" class="col-form-label">Prenom</label>
                                            <input class="form-control" type="text" placeholder="Prenom" name="firstname" value="{{Auth::user()->Profile->firstname }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="dob" class="col-form-label">Date de naissance</label>
                                            <input class="form-control" type="date" placeholder="Date de naissance" name="dob" value="{{Auth::user()->Profile->dob }}" >
                                        </div>

                                         <div class="form-group">
                                            <label for="adresse" class="col-form-label">Adresse</label>
                                            <input class="form-control" type="text" placeholder="adresse" name="address" value="{{Auth::user()->Profile->address }}" >
                                        </div>

                                         <div class="form-group">
                                            <label for="experience" class="col-form-label">Experience</label>
                                        <textarea class="form-control" name="experience">
                                          {{ Auth::user()->Profile->experience }}
                                        </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="bio" class="col-form-label"> </label>
                                        <textarea class="form-control" name="bio">
                                       {{Auth::user()->Profile->bio }}
                                        </textarea>
                                        </div>


                <button class="btn btn-success" type="submit">Validé</button>
                    </div>
      
     </div>

     </form>
         @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
</div>
  <div class="col-lg-6 mt-3">
      <div class="card mt-3">
          <div class="card-header">Profile</div>
          <div class="card-body">
             <p>Status: {{Auth::user()->Role->name }}</p>
          </div>
      </div>
      
  
        </div>
      
    </div>

@endsection

@push('js')

@endpush

