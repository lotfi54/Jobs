@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  

<div class="row">

   

<div class="col-lg-7 mt-3">
<div class="card mt-3">
                <div class="card-header mt-0">Mise à jour du profil de l'entreprise</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('company.job.store')}}">
                            @csrf 
                            <div class="form-group">
                                <div class="form-group">
                                            <label for="slogan" class="col-form-label">Intitulé du job</label>
                                            <input type="text" placeholder="Intitulé du job" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"  value="{{ old('title') }}" >
                                             @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                 @endif
                                        </div>

                                         <div class="form-group">
                                            <label for="description" class="col-form-label">Description</label>
                                        <textarea  name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  value="{{ old('description') }}">
                         
                                        </textarea>
                                      @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                 @endif
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="role" class="col-form-label">Role</label>
                                        <textarea  name="roles" class="form-control {{ $errors->has('roles') ? ' is-invalid' : '' }}"  value="{{ old('roles') }}">
                                        </textarea>

                                                                 @if ($errors->has('roles'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('roles') }}</strong>
                </span>
                 @endif
                                        </div>

                      
                                        <div class="form-group">
                                            <label for="website" class="col-form-label">Position</label>
                                            <input class="form-control" type="text" placeholder="Position" name="position">
                                        </div>


                                        <div class="form-group">
                                            <label for="address" class="col-form-label">Adresse</label>
                                            <input class="form-control" type="text" placeholder="Adresse" name="address">
                                        </div>

                             


                                      


                <button class="btn btn-success" type="submit">Validé</button>
                    </div>
      
   

    
    
</div>
</div>
</div>
 
 {{-- fin card left --}}

 <div class="col-lg-3 mt-3">
      <div class="card mt-3">
          <div class="card-header">Info</div>
          <div class="card-body">
               <div class="form-group">
                                            <label for="category" class="col-form-label">Categories</label>
                                          <select  class="selectpicker form-control" multiple title="Choisis une categories ou plus">
                                            @foreach(App\Category::all() as $cat)
                                          <option id="{{$cat->id}}">{{$cat->name}}</option>
                                          @endforeach
                                        </select>

                                    <label for="type" class="col-form-label">Type de Contrat</label>
                                          <select  name="type" class="selectpicker form-control" multiple title="Type de contrat" >
                                          <option value="cdi">CDI-Contrat à durée indéterminée</option>
                                          <option value="cdd">CDD–Contrat à durée déterminée</option>
                                        </select>

                                    <label for="status" class="col-form-label">Status</label>
                                          <select name="status" class="selectpicker form-control" title="Status" >
                                          <option value="cdi">Live</option>
                                          <option value="cdd">En-cours</option>
                                        </select>
                                        </div>

                                          <div class="form-group">
                                            <label for="last_date" class="col-form-label">Publier le</label>
                                            <input class="form-control" type="date" placeholder="Adresse" name="last_date">
                                        </div>
            


          </div>
      </div>


        </div>
      
    </div>
 </form>




@endsection

@push('js')
<script type="text/javascript">
  $(function () {
    $('select').selectpicker();
});
</script>
@endpush

