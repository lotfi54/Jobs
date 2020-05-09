@extends('layouts.app')

@section('content')





<div class="container">

<div class="row">
  <div class="col-md-12">
    <search-component></search-component>
  </div>
</div>


    <div class="row">
        <h1 class="text-left">Job recents</h1>
       <table class="table">
           <thead>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
               <th></th>
           </thead>
           <tbody>
            @foreach($jobs as $job)
            <tr>
               <td>

                {{-- <img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80"> --}}

              @if(empty($job->company->logo))
            <img  src="{{asset('avatar/man.jpg')}}" width="80">
            @else
            <img  src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80" >

            @endif


               </td>
               <td>Position : {{$job->title}}
                <br><i class="fa fa-clock-o"></i>&nbsp;{{$job->type}}</td>
             {{--   <td><i class="fa fa-map-marker"></i>&nbsp;Adresse : {{$job->address}}</td> --}}
               <td><i class="fa fa-globe"></i>&nbsp;Date : {{$job->created_at->diffForHumans()}}</td>
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
    <div class="d-flex justify-content-center">
<a href="{{route('alljobs')}}"><button class="btn btn-success">All jobs</button></a>
</div>
</div>

  <div class="container mt-5">
    <h1 class="text-left mt-5">Job recents</h1>
    <hr>
    <div class="row">
@foreach($companies as $company)
      <div class="col-lg-3 col-md-5 mb-3">
      <div class="card">
{{--   <img class="logo-company-home" src="{{asset('uploads/logo')}}/{{$company->logo}}" alt="Card image cap"> --}}

@if(empty($company->logo))
            <img class="logo-company-home" src="{{asset('avatar/man.jpg')}}">
            @else
            <img class="logo-company-home" src="{{asset('uploads/logo')}}/{{$company->logo}}" >

            @endif


  <div class="card-body">
    <h5 class="card-title">{{$company->cname}}</h5>
    <p class="card-text">{{Str::limit($company->description,20)}}</p>
 
<a href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-primary">
  Visit company
</a>

  </div>
</div>
    </div>
    @endforeach
  </div>
</div>

<example-component></example-component>

@endsection
