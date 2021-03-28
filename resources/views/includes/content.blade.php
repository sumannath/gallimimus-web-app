<!-- BEGIN: Content-->
<div class="app-content container center-layout mt-2">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">@yield('page_title')</h3>
                @section('breadcrumbs')
                    @include('includes.breadcrumbs')
                @show
            </div>
            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                <div class="media width-250 float-right">                    
                    <div class="media-body media-right text-right">
                        <h3 class="m-0">1234</h3><span class="text-muted">Visits</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @section('content')
                @yield('content')
            @show            
        </div>
    </div>
</div>
<!-- END: Content-->