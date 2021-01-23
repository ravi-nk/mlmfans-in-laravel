<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/styles/style.min.css')}}">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="{{asset('admin/fonts/material-design/css/materialdesignicons.css')}}">

	<!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugin/waves/waves.min.css')}}">


</head>
<body>
    <div id="app">
       
        @if(Auth::check())
        <div class="main-menu">
            <header class="header">
                <a href="index.html" class="logo"><i class="ico mdi mdi-cube-outline"></i>AdminDashboard</a>
                {{-- <button type="button" class="button-close fa fa-times js__menu_close"></button> --}}
                <div class="text-center pt-5">
                    {{-- <a href="#" class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""><span class="status online"></span></a> --}}
                    <h5 class="name "><a href="#">{{Auth::user()->name}}</a></h5>
                    <h5 class="position">Administrator</h5>
                    <!-- /.name -->
                    
                    <!-- /.control-wrap -->
                </div>
                <!-- /.user -->
            </header>
            <div class="navigation">
                {{-- <h5 class="title">Navigation</h5> --}}
                <!-- /.title -->
                <ul class="menu js__accordion " >
                    <li class="tab">
                        <a class="waves-effect" href="{{route('admin.home')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li class="tab">
                        <a class="waves-effect" href="{{route('admin.userlist')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>User List</span></a>
                    </li>
                    <li class="tab">
                        <a class="waves-effect" href="{{route('admin.bannerList')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Add Banner</span></a>
                    </li>
                    <li class="tab">
                        <a class="waves-effect" href="{{route('admin.planList')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Level Plans</span></a>
                    </li>
                    <li class="tab">
                        <a class="waves-effect" href="{{route('admin.addPackage')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Add Packages</span></a>
                    </li>
                    
                </ul>
                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <div class="fixed-navbar">
            <div class="pull-left">
                <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
                {{-- <h1 class="page-title"></h1> --}}
                <!-- /.page-title -->
            </div>
            <!-- /.pull-left -->
            <div class="pull-right">
                <div class="ico-item">
                    {{-- <a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
                    <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
                    <!-- /.searchform -->
                </div> --}}
                <!-- /.ico-item -->
                {{-- <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
                <a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a> --}}
                {{-- <a href="#" class="ico-item mdi mdi-logout js__logout"></a> --}}
                
                <a class="ico-item mdi mdi-logout js__logout" href="{{route('logout')}}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                
             </a>
             <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                 @csrf
             </form>
            </div>
            <!-- /.pull-right -->
        </div>

        @endif
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
   $(document).ready(function() {
$(".tab").click(function () {
    $(".tab").removeClass("current");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).addClass("current");   
});
});
    </script>
    <script src="{{asset('admin/scripts/jquery.min.js')}}"></script>
	<script src="{{asset('admin/scripts/modernizr.min.js')}}"></script>
	<script src="{{asset('admin/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('admin/plugin/nprogress/nprogress.js')}}"></script>
	<script src="{{asset('admin/plugin/waves/waves.min.js')}}"></script>

    <script src="{{asset('admin/scripts/main.min.js')}}"></script>

    

</body>
</html>
