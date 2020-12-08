<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{@url('monster/assets/images/fav-dlhk.png')}}">
    <title>SIPS</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{@url('monster/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{@url('monster/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{@url('monster/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @include('layouts.header2')
        @include('layouts.sidebar')
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    </div>
    
    <script src="/pathto/js/sweetalert.js"></script>
<!-- @include('sweet::alert') -->
    <script src="{{@url('monster/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{@url('monster/js/jquery.slimscroll.js')}}"></script>
    <script src="{{@url('monster/js/waves.js')}}"></script>
    <script src="{{@url('monster/js/sidebarmenu.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{@url('monster/js/custom.min.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{@url('monster/js/flot-data.js')}}"></script>
    <script src="{{@url('monster/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>