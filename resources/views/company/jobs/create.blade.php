    
    @extends('layouts.backend.app')
    @section('title','Creation un job')
    @push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" integrity="sha256-yebzx8LjuetQ3l4hhQ5eNaOxVLgqaY1y8JcrXuJrAOg=" crossorigin="anonymous" />
    @endpush

    @section('content')

    <div class="container justify-content-center">
        <div class="row mt-5">

            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">Creation d'un job</div>
                    <div class="card-body">

                        <form action="{{route('company.job.store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Intitulé du job:</label>
                                <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" 
                                 value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <input id="description" type="hidden" name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  value="{{ old('description') }}">  
                                <trix-editor input="description"></trix-editor>
                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>







                            <div class="form-group">
                                <label for="role">Roles</label>
                                <input id="roles" type="hidden" name="roles" class="form-control {{ $errors->has('roles') ? ' is-invalid' : '' }}"  value="{{ old('roles') }}">  
                                <trix-editor input="roles"></trix-editor>
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
                        @if ($errors->has('category'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                                @endif
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

<div class="col-md-6">
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
                                <select  name="status" class="custom-select{{ $errors->has('status') ? ' is-invalid' : '' }}"  value="{{ old('status') }}">
                                    <option value="1">En ligne</option>
                                    <option value="0">En-cours</option>
                                </select>
                                 @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="lastdate">Date de publication:</label>
                                <input type="date"   name="last_date" class="form-control{{ $errors->has('last_date') ? ' is-invalid' : '' }}"  value="{{ old('last_date') }}">
                                @if ($errors->has('last_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_date') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Publié <i class="ti-save ml-2"></i></button>
                            </div>

</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" integrity="sha256-2D+ZJyeHHlEMmtuQTVtXt1gl0zRLKr51OCxyFfmFIBM=" crossorigin="anonymous"></script>
@endpush

