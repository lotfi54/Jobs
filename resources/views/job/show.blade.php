@extends('layouts.frontend.app-alljobs')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mb-3">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="card jobber">
                <div class="card-header header-jobber">{{$job->title}}</div>

                <div class="card-body body-jobber">
                
                    <h3>Description</h3>
                    <p class="description">
                    {!!$job->description!!}
                </p>
                <h3>Fonctions</h3>
                  <p>{!!$job->roles!!}</p>
                </div>
            </div>
        </div>

    <div class="col-md-4">
        <div class="card mb-3 jobber">
            <div class="card-header header-jobber">Infos</div>
            <div class="card-body body-jobber">
                <p>Entreprise:<a href="{{route('company.index',[$job->company->id,$job->company->slug])}}"> {{$job->company->cname}}</a></p>
                <p>Adresse: {{$job->address}}</p>
                <p>Type d'offre : {{$job->type}}</p>
                <p>Activité: {{$job->position}}</p>
                <p>Date de publication: {{$job->created_at->diffForHumans()}}</p>
                  <p>
Date limite pour postuler:&nbsp;{{ date('F d, Y',strtotime($job->last_date))}}</p>
            </div>
        </div>

              <div class="btn-applySingle mb-3">
             @if(Auth::check()&&Auth::user()->role_id==3)
            @if(!$job->checkApplication())
        <apply-component :jobid={{$job->id}}></apply-component>
            @endif 
            <favorite-component :jobid={{$job->id}} :favorited={{$job->checkSaved()?'true':'false'}}></favorite-component>
            @endif 
        </div>
        
        </div>
    </div>
    </div>
</div>
@endsection
