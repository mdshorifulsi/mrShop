<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>

    <!-- Google font -->
    <link href="{{asset('assets/frontend/https://fonts.googleapis.com/css?family=Hind:400,700')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- top Header -->
       
        <!-- /top Header -->

        <!-- header -->
        @include('pages.partial.header')
        <!-- container -->
    </header>
    <!-- /HEADER -->
 @include('pages.partial.navbar')
    <!-- NAVIGATION -->
    
    <!-- /NAVIGATION -->

    <!-- HOME -->
   
    <!-- /HOME -->

    <!-- section -->
@yield('content')
    <!-- /section -->
@include('pages.partial.footer')
    <!-- FOOTER -->
    
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>

</html>
