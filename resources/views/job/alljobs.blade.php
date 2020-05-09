@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <form action="{{route('alljobs')}}" method="GET">

    <div class="form-inline mt-5">
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
    </div>    <br>

    </form>
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
                     @if(empty($job->company->logo))
            <img  src="{{asset('avatar/man.jpg')}}" width="80">
            @else
            <img  src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80" >

            @endif
               </td>
               <td>Position : {{$job->position}}
                <br><i class="fa fa-clock-o"></i>&nbsp;{{$job->type}}</td>
               <td><i class="fa fa-map-marker"></i>&nbsp;Category : {{$job->category->name}}</td>
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
       {{$jobs->links()}}
       
    </div> 

</div>

@endsection
