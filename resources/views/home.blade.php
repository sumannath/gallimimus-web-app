@extends('layouts.master')

@section('title', 'Home')
@section('page_title', 'Home')

@section('content')
    @include('includes.stats')

<section id="global-settings" class="card">
    <div class="card-header">
        <h4 class="card-title">What is {{ env('APP_NAME') }} ?</h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p>
                  Gallimimus enables you to automatically install popular applications for the Windows operating system.
                  You can make a selection from a list of applications and download a single installer package.
                  It is free for personal use. 
                </p>
                <p class="d-flex justify-content-center">
                    <img src="app-assets/images/elements/gallimimus-app.png" width="500" />
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <!-- Floating Outline button with text -->
                            <button type="button" class="btn btn-float btn-float-lg btn-outline-pink">
                                <i class="fa fa-cloud-download"></i><span>Create a package now</span>
                            </button>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>        
</section>
@endsection