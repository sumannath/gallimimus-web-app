<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@section('html_head')
    @include('includes.html_head')
@show

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    @section('header')
        @include('includes.header')
    @show

    @section('navbar')
        @include('includes.navbar')
    @show    

    @include('includes.content')
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer fixed-bottom footer-static footer-light navbar-shadow">        
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; {{ date('Y') }} <a class="text-bold-800 grey darken-2" href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }} </a></span>
            <span class="float-md-right d-none d-lg-block">
                <a class="text-bold-800 grey darken-2" href="https://github.com/sumannath" target="_blank">Terms and Conditions</a> | 
                <a class="text-bold-800 grey darken-2" href="https://github.com/sumannath" target="_blank">Privacy Policy</a>
            </span>
            <span class="float-md-right d-none d-lg-block"> Hand-crafted & Made with <i class="feather icon-heart pink"></i> by <a class="text-bold-800 grey darken-2" href="https://github.com/sumannath" target="_blank">Suman</a> |</span>
        </p>
    </footer>
    <!-- END: Footer-->

    @section('html_footer')
        @include('includes.html_footer')
    @show
    

</body>
<!-- END: Body-->

</html>