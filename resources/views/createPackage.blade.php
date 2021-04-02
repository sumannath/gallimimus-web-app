@extends('layouts.master')

@section('title', 'Create Package')
@section('page_title', 'Create Package')

@section('content')
<!-- Collapse start -->
<section id="collapsible">    
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="mb-2 mt-2">
                        <h5 class="mb-0 text-uppercase">Select Applications from the list below</h5>
                        <p>Use icons on the right to minimize / maximize a category.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1 pull-right"><i class="fa fa-compress"></i> Collapse All</button>
                    <a href="#" class="btn btn-primary" style="position: fixed; bottom: 50px; right: 20px; z-index: 100"><i class="fa fa-download"></i> Download Package</a>
                </div>
            </div>
            <div class="card collapse-icon accordion-icon-rotate">
                @foreach($applicationCategories as $applicationCategory)
                    <div id="headingCollapse{{ $loop->index }}" class="card-header primary" data-toggle="collapse" href="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                        <a class="card-title lead" href="javascript:void(0);">{{ $applicationCategory->name }}</a>
                    </div>
                    <div id="collapse{{ $loop->index }}" role="tabpanel" aria-labelledby="headingCollapse{{ $loop->index }}" class="collapse show">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Minimal statistics with bg color section start -->
                                <section id="minimal-statistics-bg">                                    
                                    <div class="row">
                                        @foreach($applicationCategory->applications as $application)
                                        <div class="col-xl-3 col-sm-6 col-12">
                                        @switch($loop->index % 4)
                                            @case(0)
                                                <div class="card bg-secondary">
                                                @break
                                            @case(1)
                                                <div class="card bg-danger">
                                                @break
                                            @case(2)
                                                <div class="card bg-success">
                                                @break
                                            @case(3)
                                                <div class="card bg-warning">
                                                @break
                                            @endswitch
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="media d-flex">
                                                            <div class="align-self-center">
                                                                <img src="{{ $application->icon }}" width="80"></img>
                                                            </div>
                                                            <div class="media-body white text-right">
                                                                <h3>{{ $application->name }}</h3>
                                                                <span>{{ $application->versions->get(0)->version }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row skin skin-polaris">
                                                            <div class="col-md-6 col-sm-12">
                                                                <fieldset>
                                                                    <input type="checkbox" id="input-15">
                                                                    <label for="input-15" class="white">Add this</label>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach                                        
                                    </div>
                                </section>
                                <!-- // Minimal statistics with bg color section end -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
    </div>
</section>
<!-- Collapse end -->
@endsection