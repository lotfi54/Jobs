@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  
    <div class="col-lg-11">
<div class="row mt-5 ml-4  justify-content-center">

     @foreach($jobs as $job)

<div class="card" style="width: 25rem;margin:10px;">
  <div class="card-body">
    <h5 class="card-title">{{$job->title }}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Contrat :&nbsp;{{$job->type }}</li>
    <li class="list-group-item">Date de publication:&nbsp;{{$job->last_date}}</li>
    <li class="list-group-item">Catégorie:&nbsp;{{$job->category->name}}</li>
  </ul>
  <div class="card-body text-center">
     <a href="{{route('job.show',[$job->id,$job->slug])}}"> <button class="btn btn-dark">Voir</button></a>
  </div>
</div> 

@endforeach


</div>
<div class="row mt-5 d-flex justify-content-center">

</div>
</div>






@endsection

@push('js')

@endpush

