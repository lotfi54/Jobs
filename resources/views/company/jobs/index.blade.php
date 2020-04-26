@extends('layouts.backend.app')

@section('title','Profile')

@push('css')

@endpush

@section('content')
  

<div class="row mt-5">
  <a href="{{route('company.job.create')}}">
 <button class="btn btn-success">Nouveau job</button>
</a>
</div>

<div class="row">
    <span class="badge bg-blue">{{ $jobs->count() }}</span>
<div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
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

