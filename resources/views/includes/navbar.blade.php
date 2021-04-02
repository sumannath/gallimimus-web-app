<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border navbar-fixed" role="navigation" data-menu="menu-wrapper">
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        <!-- include ../../../includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item @if(Request::is('/')) active @endif" data-menu="">
                <a class="nav-link" href="{{ route('homepage') }}" data-toggle="">
                    <i class="feather icon-home"></i><span data-i18n="Dashboard">Home</span>
                </a>               
            </li>
            <li class="nav-item @if(Request::is('create')) active @endif" data-menu="">
                <a class="nav-link" href="{{ route('createPackage') }}" data-toggle="">
                    <i class="feather icon-box"></i><span data-i18n="Templates">Create a package</span>
                </a>
            </li>
            <li class="dropdown nav-item float-md-right" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file-text"></i><span data-i18n="Pages">Pages</span></a>
                <ul class="dropdown-menu">
                    <li data-menu="">
                        <a class="dropdown-item" href="account-setting.html" data-i18n="About Us" data-toggle="dropdown">About Us</a>
                    </li>
                    <li data-menu="">
                        <a class="dropdown-item" href="account-setting.html" data-i18n="Terms and Conditions" data-toggle="dropdown">Terms and Conditions</a>
                    </li>
                    <li data-menu="">
                        <a class="dropdown-item" href="account-setting.html" data-i18n="Privacy Policy" data-toggle="dropdown">Privacy Policy</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>
<!-- END: Main Menu-->