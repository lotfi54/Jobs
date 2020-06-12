@extends('layouts.frontend.app-alljobs')

@section('content')
<div class="container">

<div class="row">
  <div class="col-lg-3 col-md-12 col-sm-12">
<form action="{{route('alljobs')}}" method="GET">
     <div class="form mt-5">
        <div class="form-group">
            
            <input type="text" name="position" class="form-control" placeholder="Mot clé">&nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>Employment &nbsp;</label>
            <select class="form-control" name="type">
                    <option value="">-select-</option>
                    <option value="fulltime">fulltime</option>
                    <option value="parttime">parttime</option>
                    <option value="casual">casual</option>
                </select>
                &nbsp;&nbsp;
        </div>
        <div class="form-group">
            <label>category</label>
            <select name="category_id" class="form-control">
                <option value="">-select-</option>

                    @foreach(App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                &nbsp;&nbsp;
        </div>

        <div class="form-group">
            <label>address</label>
            <input type="text" name="address" class="form-control" placeholder="address">&nbsp;&nbsp;
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">

        </div>
    </div> 
  </form>
  </div>


 <div class=" col-12 col-lg-9 col-md-12 col-sm-12 mt-5">
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

