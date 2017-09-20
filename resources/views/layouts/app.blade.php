<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{{ asset('js/jquery.min.js') }}"></script>


         <script type="text/javascript">
            base_url = "<?php echo URL::to('/'); ?>";
            module = "<?php echo '/'.@$module; ?>";

            // function refreshToken(){
            //     $.get('token').done(function(data){
            //         csrfToken = data; // the new token
            //         $('meta[name="csrf-token"]').attr('content',csrfToken)
            //     });
            // }

            // setInterval(refreshToken, 60000); // 1 hour 
        </script>
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" href="{{ asset('fonts/css/font-awesome.min.css') }}">
        <!-- @yield('class') -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css')}}">

    <!-- {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}} -->

    <!-- imsroot -->
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/app.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/custom.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/green.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/index.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/prettify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/selectize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imsroot/css/switchery.min.css')}}">

    <style>
        body {
            font-family: 'Lato';
            font-size: 16px;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" class="nav-md">
  <!--   <nav class="navbar navbar-inverse navbar-static-top" style="padding: 0 30px 0 15px;">
        <div class="container-fluid">
            <div class="navbar-header"> -->

                <!-- Collapsed Hamburger -->
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->

                <!-- Branding Image -->
                <!-- <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{asset('images/logo.png')}}" width="190px" height="30px;">
                </a>
            </div> -->

          <!--   <div class="collapse navbar-collapse" id="app-navbar-collapse">
                Left Side Of Navbar
                <ul class="nav navbar-nav">
                    
                </ul>

                Right Side Of Navbar
                <ul class="nav navbar-nav navbar-right">
                    Authentication Links
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"></a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li> 
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> -->

        <div class="alert alert-success alert-notification-success">
            <span class="glyphicon glyphicon-ok"></span> <em class="notif-msg"> Saving Successful</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="alert alert-danger alert-notification-failed">
            <span class="glyphicon glyphicon-remove"></span> <em class="notif-msg"> Saving Failed!</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @yield('content')

    <!-- JavaScripts -->

    <script src="{{ asset('js/bootstrap.min.js') }} "></script>  
      <!-- js -->
    <!-- <script type="text/javascript" src="{{asset('css/imsroot/js/bootstrap-progressbar.min.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('css/imsroot/js/bootstrap-wysiwyg.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('css/imsroot/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/jquery.form.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/jquery.hotkeys.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/jquery.smartWizard.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('css/imsroot/js/nprogress.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('css/imsroot/js/plugins.js')}}"></script> -->
    <!-- <script type="text/javascript" src="{{asset('css/imsroot/js/switchery.min.js')}}"></script> -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
      @yield('js-logic1')
      @yield('js-logic2')
</body>
</html>
