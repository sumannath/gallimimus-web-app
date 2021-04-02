<div class="row breadcrumbs-top">
    <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item @if(Request::is('/')) active @endif"><a href="{{ route('homepage') }}">Home</a></li>
            @if(Request::is('create'))<li class="breadcrumb-item active"><a href="{{ route('createPackage') }}">Create Package</a></li> @endif
        </ol>
    </div>
</div>