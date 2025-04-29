<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>@yield('main-title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    @yield('styles')

    <!-- Boostrap Link -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('home.index') }}">
                    <b class="logo-abbr"><img src="{{ asset('images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('images/logo-compact.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('images/logo-img.png') }}" alt="">
                        <span class="logo-text">DAR-uL-FALAH</span>
                    </span>
                   
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                       
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <img src="{{ asset('images/user/1.png') }}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>

                                        <hr class="my-2">

                                        <li>
                                            <a href="#"><i class="icon-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="{{ route('in.logout') }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li class="nav-label">Dashboard</li> --}}
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/dashboard">Home</a></li>
                            
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Menus</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('menus.show') }}">View Menu</a></li>
                            <li><a href="{{ route('menus.create') }}">Create Menu</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-desktop menu-icon"></i> <span class="nav-text">Sliders</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('sliders.show') }}">View Slider</a></li>
                            <li><a href="{{ route('sliders.create') }}">Create Slider</a></li>
                        </ul>
                    </li>
                    <li class="menu-display">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a href="./app-calender.html">Calender</a></li>
                        </ul>
                    </li>
                    <li class="menu-display">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Banners</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-film menu-icon"></i><span class="nav-text">Banners</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('banners.show') }}">View Banner</a></li>
                            <li><a href="{{ route('banners.create') }}">Create Banner</a></li>

                        </ul>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                        </ul>
                    </li> --}}
                    <li class="menu-display">
                        <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-map menu-icon"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('categories.show') }}">View Categories</a></li>
                            <li><a href="{{ route('categories.create') }}">Create Categories</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Sub Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('subcategories.show') }}">View SubCategories</a></li>
                            <li><a href="{{ route('subcategories.create') }}">Create SubCategories</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-label">Table</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-pin menu-icon"></i><span class="nav-text">Prices</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('prices.show') }}">View Prices</a></li>
                            <li><a href="{{ route('prices.create') }}">Create Prices</a></li>
                        </ul>
                    </li>
                    
                     <li class="nav-label">Table</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-wallet menu-icon"></i><span class="nav-text">Wadges</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('wadges.show') }}">View Wadges</a></li>
                            <li><a href="{{ route('wadges.create') }}">Create Wadges</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-present menu-icon"></i><span class="nav-text">Packages</span>
                        </a>
                        <ul aria-expanded="false">
                            
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                    <i class="icon-social-dropbox menu-icon"></i><span class="nav-text">Package Assets</span>
                                </a>
                                <ul aria-expanded="false">
        
                                    <li><a href="{{ route('assets.show') }}">View Package Asset</a></li>
                                    <li><a href="{{ route('assets.create') }}">Create Package Asset</a></li>
                                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                        <ul aria-expanded="false">
                                            <li><a href="./page-error-404.html">Error 404</a></li>
                                            <li><a href="./page-error-403.html">Error 403</a></li>
                                            <li><a href="./page-error-400.html">Error 400</a></li>
                                            <li><a href="./page-error-500.html">Error 500</a></li>
                                            <li><a href="./page-error-503.html">Error 503</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </li>

                            <li><a href="{{ route('packages.show') }}">View Package</a></li>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('users.show') }}">View User</a></li>
                            <li><a href="{{ route('users.create') }}">Create User</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            @yield('content')

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('breadcrumb-title-1')</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"> @yield('breadcrumb-title-2')</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
            
                    <div class="col-lg-12">
            
                        <div class="content-title">
                        
                            <h3>@yield('content-title')</h3>

                            @yield('add-action')
                            
                        </div>

                        @if(session('error'))

                            <div class="alert alert-danger" role="alert">
                               {{ session('error') }}
                            </div>

                        @endif

                        
                        @if(session('success'))

                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            
                        @endif

                    
                    </div>
            
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body cc-body" style="font-size: 16px">
                                <div class="card-title">
                                    <h4>@yield('card-title')</h4>
                                </div>

                                @yield('content-body')

                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            </div>

        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
        
    @stack('scripts')
    
</body>

</html>
