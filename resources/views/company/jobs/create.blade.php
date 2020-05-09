@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  

<div class="container justify-content-center">
    <div class="row mt-5">

        <div class="col-md-10">
       
            <div class="card">
            <div class="card-header">Create a job</div>
            <div class="card-body">

            <form action="{{route('company.job.store')}}" method="POST">@csrf

            <div class="form-group">
                <label for="title">Intitulé du job:</label>
                <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"  value="{{ old('title') }}">
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                 @endif
                
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
            <textarea name="description" id="summernote" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" >{{ old('description') }}</textarea>

{{--   <div class="form-group">
<input id="description" type="hidden" name="description"  class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">
  <trix-editor input="description">{{ old('description') }}</trix-editor>

 --}}


            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                 @endif
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
            <textarea name="roles"  class="form-control {{ $errors->has('roles') ? ' is-invalid' : '' }}" >{{old('roles')}}</textarea>
            @if ($errors->has('roles'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('roles') }}</strong>
                </span>
                 @endif
            </div>
            <div class="form-group">
                <label for="category">Categorie:</label>
                <select name="category" class="form-control">
                    @foreach(App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}"  value="{{ old('position') }}">
                @if ($errors->has('position'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('position') }}</strong>
                </span>
                 @endif

            </div>
            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{ old('address') }}">
                @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
                 @endif
            </div>



{{-- 
            <div class="form-group">
                <label for="number_of_vacancy">No of vacancy:</label>
                <input type="text" name="number_of_vacancy" class="form-control{{ $errors->has('number_of_vacancy') ? ' is-invalid' : '' }}"  value="{{ old('number_of_vacancy') }}">
                @if ($errors->has('number_of_vacancy'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('number_of_vacancy') }}</strong>
                </span>
                 @endif
            </div> --}}
{{-- 
             <div class="form-group">
                <label for="experience">Year of experience:</label>
                <input type="text" name="experience" class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"  value="{{ old('experience') }}">
                @if ($errors->has('experience'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('experience') }}</strong>
                </span>
                 @endif
            </div> --}}
{{-- 
              <div class="form-group">
                <label for="type">Gender:</label>
                <select class="form-control" name="gender">
                    <option value="any">Any</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div> --}}

            {{--    <div class="form-group">
                <label for="type">Salary/year:</label>
                <select class="form-control" name="salary">
                    <option value="negotiable">Negotiable</option>
                    <option value="2000-5000">2000-5000</option>
                    <option value="50000-10000">5000-10000</option>
                    <option value="10000-20000">10000-20000</option>
                    <option value="30000-500000">50000-500000</option>
                    <option value="500000-600000">500000-600000</option>

                    <option value="600000 plus">600000 plus</option>
                </select>
            </div> --}}
 



            <div class="form-group">
                <label for="type">Type de contrat:</label>
                <select class="form-control" name="type">
                    <option value="CDI – Contrat à durée indéterminée">CDI – Contrat à durée indéterminée</option>
                    <option value="CDD – Contrat à durée déterminée">CDD – Contrat à durée déterminée</option>
                    <option value="CTT – Contrat de travail temporaire ou Intérim">CTT – Contrat de travail temporaire ou Intérim</option>
                </select>
            </div>





            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="1">En ligne</option>
                    <option value="0">En-cours</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastdate">Date de publication:</label>
                <input type="date"   name="last_date" class="form-control">
               
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
             



        </div>
    </form>
    </div>
    </div>
    </div>

@endsection

@push('js')
<script type="text/javascript">
  $(function () {
    $('select').selectpicker();
});
</script>
@endpush

