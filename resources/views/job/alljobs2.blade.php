
@extends('layouts.app')

@section('content')
<div class="container">
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
               <td>Titre: {{$job->title}}
                <br><i class="fa fa-clock-o"></i>&nbsp;{{$job->type}}</td>
               <td><i class="fa fa-map-marker"></i>&nbsp;Categorie : {{$job->category->name}}</td>
               <td><i class="fa fa-globe"></i>&nbsp;Date : {{$job->created_at->diffForHumans()}}</td>
               <td>
                <a href="{{route('job.show',[$job->id,$job->slug])}}">
                <div class="btn-apply">
                  <p>Voir</p>
                </div>
              </a>
              </td>
           </tr>
           </tbody>
           @endforeach
       </table>
     {{$jobs->links()}}
       
    </div> 

</div>

@endsection

