@extends('layouts.app')

@section('content')




 <div class="jumbotron jumbotron bg-cover" @if(empty($company->cover_photo)) style="background-image: url({{asset('cover/ 
tumblr-image-sizes-banner.png')}});" @else 

 style="background-image: url({{asset('uploads/coverphoto')}}/{{$company->cover_photo}});" @endif>

    <div class="overlay"></div>
    <div class="container">
      <h1 class="display-3 mb-1"><p>{{$company->cname}}</p></h1>
      <p class="lead">{{$company->slogan}}</p>
   
    </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-lg-6">
    <p class="desc">
    GaLLERY
    </p>
  </div>

  <div class="col-lg-6">
  

<p class="desc mt-5">
      {{$company->description}}
    </p>
    <hr>
  </div>
</div>

  <div class="row">
     <div class="col-lg-6">
      <hr>
    <div class="infoCompany mt-3">
      <div class="title-info mt-2">Informations</div>
      <p> <span class="ti-location-pin"></span> {{$company->address}}</p>
      <p>  <span class="ti-mobile"></span> {{$company->phone}}</p>
      <p>  <span class="ti-world"></span> {{$company->website}}</p>
    

    </div>
  </div>

  <div class="col-lg-4">
     <div class="logo-company">
       

    @if(empty($company->logo))

      <img width="100" src="{{asset('avatar/man.jpg')}}">

      @else
      <img width="100" src="{{asset('uploads/logo')}}/{{$company->logo}}">

      @endif

    </div>
  </div>
</div>
</div>

</div>

<div class="container mt-5">
  <div class="title-info mt-5">Jobs</div>
  <div class="row">

    <table class="table">
        {{--    <thead>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
           </thead> --}}
           <tbody>
            @foreach($company->jobs as $job)

            <tr>
               <td><img src="{{asset('avatar/man.jpg')}}" width="80"></td>
               <td>Position : {{$job->position}}
                <br><i class="fa fa-clock-o"></i>&nbsp;{{$job->type}}</td>
               <td><i class="fa fa-map-marker"></i>&nbsp;Address : {{$job->address}}</td>
               <td><i class="fa fa-globe"></i>&nbsp;Posted : {{$job->created_at->diffForHumans()}}</td>
        
               <td>
                <a href="{{route('job.show',[$job->id,$job->slug])}}">
                <div class="btn-apply">
                  <p>Postuler</p>
                </div>
              </a>
              </td>
           </tr>
           </tbody>
           @endforeach
       </table>
  </div>
</div>




@endsection
