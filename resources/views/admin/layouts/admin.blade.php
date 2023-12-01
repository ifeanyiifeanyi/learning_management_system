<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('admin/assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('admin/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('admin/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/assets/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{asset('admin/assets/css/header-colors.css')}}"/>
    <title>{{ config('app.name') }} || @yield('title') </title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    @include('admin.layouts.includes.sidebar')

    @include('admin.layouts.includes.header')
    <!--start page wrapper -->
        @yield('admin')
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    @include('admin.layouts.includes.footer')
</div>
<!--end wrapper-->

    @include('admin.layouts.includes.extras')

<!-- Bootstrap JS -->
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/plugins/chartjs/js/chart.js')}}"></script>
<script src="{{asset('admin/assets/js/index.js')}}"></script>
<!--app JS-->
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script>
    new PerfectScrollbar(".app-container")
</script>
<script>
    document.getElementById('di').innerHTML =  new Date().getFullYear()
</script>
</body>

</html>
