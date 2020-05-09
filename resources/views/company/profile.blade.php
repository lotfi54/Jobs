@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  

<div class="row">

   <div class="col-lg-3 mt-5">
      <div class="d-flex justify-content-center ">
            @if(empty(Auth::user()->company->logo))
            <div class="text-center">
            <img class="text-center" src="{{asset('avatar/man.jpg')}}" width="100" style="width: 40%;">
          </div>
            @else
            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" width="100" style="width: 40%;">

            @endif
          </div>
            <br><br>

            <form action="{{route('company.company.logo')}}" method="POST" enctype="multipart/form-data">@csrf

            <div class="card">
                <div class="card-header">Logo de l'entreprise</div>
                <div class="card-body">
                    <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="company_logo">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                              </div>
                    <br>
                    <button class="btn btn-success float-left" type="submit"><span class="ti-import"></span></button>
                    @if($errors->has('avatar'))
                            <div class="error" style="color: red;">{{$errors->first('avatar')}}</div>
                        @endif

                </div>
            </div>
        </form>


        </div>

<div class="col-lg-6 mt-3">
<div class="card mt-3">
                <div class="card-header mt-0">Mise à jour du profil de l'entreprise</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('company.profile.create')}}">
                            @csrf 
                            <div class="form-group">
                                <div class="form-group">
                                            <label for="slogan" class="col-form-label">Nom</label>
                                            <input class="form-control" type="text" placeholder="name" name="cname" value="{{Auth::user()->company->cname }}">
                                        </div>

                                          <div class="form-group">
                                            <label for="slogan" class="col-form-label">Slogan</label>
                                            <input class="form-control" type="text" placeholder="Slogan" name="slogan" value="{{Auth::user()->company->slogan }}" >
                                        </div>
                        
                                         <div class="form-group">
                                            <label for="adresse" class="col-form-label">Adresse</label>
                                            <input class="form-control" type="text" placeholder="adresse" name="address" value="{{Auth::user()->company->address }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="phone" class="col-form-label">Numero de téléphone</label>
                                            <input class="form-control" type="text" placeholder="Numero de téléphone" name="phone" value="{{Auth::user()->company->phone }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="website" class="col-form-label">Site web</label>
                                            <input class="form-control" type="text" placeholder="Site web" name="website" value="{{Auth::user()->company->website }}" >
                                        </div>

                                         <div class="form-group">
                                            <label for="description" class="col-form-label">Description</label>
                                        <textarea class="form-control" name="description">
                          {{Auth::user()->company->description }}
                                        </textarea>
                                        </div>


                                      


                <button class="btn btn-success" type="submit">Validé</button>
                    </div>
      
   

     </form>
    
</div>
</div>
</div>
 
 {{-- fin card left --}}

 <div class="col-lg-3 mt-3">
      <div class="card mt-3">
          <div class="card-header">Info</div>
          <div class="card-body">
           
            <p>Page de l'entreprise <a href="company/{{Auth::user()->Company->slug}}">View</a></p>


          </div>
      </div>
      <form action="{{route('company.cover.photo')}}" method="POST" enctype="multipart/form-data">
         @csrf 
      <div class="card mt-5">
          <div class="card-header">Photo de couverture</div>
          <div class="card-body">
             <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="cover_photo">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit"><span class="ti-import"></span></button>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                              <img src="{{asset('uploads/coverphoto')}}/{{Auth::user()->Company->cover_photo}}" width="100" style="width: 100%;">
                                            </div>      
          </div>

      </div>
</form>

        </div>
      
    </div>





@endsection

@push('js')

@endpush

