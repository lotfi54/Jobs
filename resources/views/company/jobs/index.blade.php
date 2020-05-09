@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  
    <div class="row mt-5 ml-1 new-job">
  <a href="{{route('company.job.create')}}">
 <button class="btn btn-primary btn-lg btn-block">Nouveau job</button> 
</a>
</div>

{{-- <div class="new-job">
  <a href="#">  
  s
</a>
</div>
 --}}

 
    <div class="col-lg-11">
<div class="row mt-5 ml-4  justify-content-center">

     @foreach($jobs as $job)

<div class="card" style="width: 25rem;margin:10px;">

 @if($job->status == 1)
<div class="status-job"></div>
  @else
<div class="status-job-draft"></div>
 @endif








  <div class="card-body">
    <h5 class="card-title">{{$job->title }}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Contrat :&nbsp;{{$job->type }}</li>
    <li class="list-group-item">Date de publication:&nbsp;{{$job->last_date}}</li>
    <li class="list-group-item">Catégorie:&nbsp;{{$job->category->name}}</li>
  </ul>
  <div class="card-body text-center">
     <a href="{{route('company.job.edit',[$job->id])}}"> <button class="btn btn-dark">Editer</button></a>
  </div>
</div> 

@endforeach


</div>
<div class="row mt-5 d-flex justify-content-center">
{{$jobs->links()}}
</div>
</div>











@endsection

@push('js')

@endpush

