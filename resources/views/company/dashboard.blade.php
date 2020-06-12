@extends('layouts.backend.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
 <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-files"></i> Jobs</div>
                                            <h2>{{ $jobs->count()}}</h2>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-files"></i> Applicants</div>
                                            <h2>{{ $applicants->count()}}</h2>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                     </div>
                  
                    </div>
         
                </div>

            </div>
@endsection

@push('js')

@endpush

