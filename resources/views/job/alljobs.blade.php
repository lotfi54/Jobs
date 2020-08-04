@extends('layouts.frontend.app-alljobs')

@section('content')
<div class="container">
<div class="title-job text-center mb-3"><h1>Découvrez les offres d’emploi</h1></div>
<form action="{{route('alljobs')}}" method="GET">

  <div class="form-row">
    <div class="col-md-3 mb-3">
      
      <input type="text" name="position" class="form-control" placeholder="Le job de vos rêves ?">&nbsp;&nbsp;&nbsp;
  
    </div>
    <div class="col-md-3 mb-3">

      <input type="text" name="address" class="form-control" placeholder="ou ?">&nbsp;&nbsp;
      
    </div>

    <div class="col-md-2 mb-3">
    <select name="category_id" class="form-control">
                <option value="">Secteur</option>

                    @foreach(App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
    </div>

    <div class="col-md-2 mb-3">
    <select class="form-control" name="type">
                    <option value="">Contrat</option>
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
    </div>

    <div class="col-md-2 mb-3">
    <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
    </div>
  </div>

  </div>
</form>

</div>



<div class="container">

 <div class=" col-12  col-md-12 col-sm-12">
   <div class="row">
     @if(count($jobs)>0)
     @foreach($jobs as $job)
     <div class="card job ">
 
  <div class="card-body body-jobber">
    <h5 class="card-type" class="card-title">{{$job->position}}</h5>
    <p class="card-text">{{$job->category->name}}</p>
    <p class="card-text">{{$job->type}}</p>
    <p class="card-text">{{$job->created_at->diffForHumans()}}</p>
  </div>
 
  <a href="{{route('job.show',[$job->id,$job->slug])}}" class="btn-plus d-flex justify-content-center"><p>Postuler</p></a>

</div>
@endforeach
@else
            Il n'y pas encore de job
            @endif
   </div>
  </div>
          {{$jobs->links()}}
</div>
</div>

@endsection

