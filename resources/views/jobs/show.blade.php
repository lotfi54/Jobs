@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
                <p>
                    <h3>Description</h3>
                    {{$job->description}}
                </p>
                <h3>Fonctions</h3>
                  <p>{{$job->roles}}</p>
                </div>
            </div>
        </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Infos</div>
            <div class="card-body">
                <p>Entreprise:<a href="{{route('company.index',[$job->company->id,$job->company->slug])}}"> {{$job->company->cname}}</a></p>
                <p>Adresse: {{$job->address}}</p>
                <p>Type d'offre : {{$job->type}}</p>
                <p>Activité: {{$job->position}}</p>
                <p>Date: {{$job->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <div class="btn-applySingle mt-3">
            <p>Postuler</p>
        </div>
    </div>
    </div>
</div>
@endsection
