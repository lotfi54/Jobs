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
                        <form method="POST" action="{{route('company.profile.create')}}">
                            @csrf 
                            <div class="form-group">
                                <div class="form-group">
                                            <label for="slogan" class="col-form-label">Intitulé du job</label>
                                            <input class="form-control" type="text" placeholder="Intitulé du job" name="title" >
                                        </div>

                                         <div class="form-group">
                                            <label for="description" class="col-form-label">Description</label>
                                        <textarea class="form-control" name="description">
                         
                                        </textarea>
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="role" class="col-form-label">Role</label>
                                        <textarea class="form-control" name="role">
                         
                                        </textarea>
                                        </div>

                      
                                        <div class="form-group">
                                            <label for="website" class="col-form-label">Position</label>
                                            <input class="form-control" type="text" placeholder="Position" name="position">
                                        </div>


                                        <div class="form-group">
                                            <label for="address" class="col-form-label">Adresse</label>
                                            <input class="form-control" type="text" placeholder="Adresse" name="addresd">
                                        </div>

                             


                                      


                <button class="btn btn-success" type="submit">Validé</button>
                    </div>
      
   

     </form>
    
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
                                          <select  class="selectpicker form-control" multiple title="Type de contrat">
                                          <option value="cdi">CDI-Contrat à durée indéterminée</option>
                                          <option value="cdd">CDD–Contrat à durée déterminée</option>
                                        </select>

                                    <label for="type" class="col-form-label">Status</label>
                                          <select  class="selectpicker form-control" title="Status">
                                          <option value="cdi">Live</option>
                                          <option value="cdd">En-cours</option>
                                        </select>
                                        </div>

                                          <div class="form-group">
                                            <label for="lastdate" class="col-form-label">Publier le</label>
                                            <input class="form-control" type="date" placeholder="Adresse" name="last_date">
                                        </div>
            


          </div>
      </div>
      <form action="{{route('company.cover.photo')}}" method="POST" enctype="multipart/form-data">
         @csrf 
      <div class="card mt-5">
          <div class="card-header">Photo de couverture</div>
          <div class="card-body">
             <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="cover_photo">
                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit"><span class="ti-import"></span></button>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                              <img src="{{asset('uploads/coverphoto')}}/{{Auth::user()->Company->cover_photo}}" width="100" style="width: 100%;">
                                            </div>      
          </div>

      </div>
</form>

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

