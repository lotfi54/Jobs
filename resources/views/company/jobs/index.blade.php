@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  
    <div class="row mt-5 ml-1">
  <a href="{{route('company.job.create')}}">
 <button class="btn btn-success">Nouveau job</button> 
</a>
</div>


<div class="row">

 
<div class="col-12 mt-5">

                        <div class="card">
                            <div class="card-body"> <span class="badge bg-blue">{{ $jobs->count() }}</span>
                                <h4 class="header-title">Data Table Primary</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Intitulé job</th>
                                                <th>adresse</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Crée</th>
                                                <th>Modifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jobs as $job)
                                            <tr>
                            <td>{{$job->title }}</td>
                            <td>{{$job->address }}</td>
                            <td>{{$job->type }}</td>
                            <td>
                            
                                {{$job->status }}</td>
                            <td>{{$job->last_date }}</td>
                            <td>
                               <a href="{{route('company.job.edit',[$job->id])}}"> <button class="btn btn-dark">Editer</button></a></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>


@endsection

@push('js')

@endpush

