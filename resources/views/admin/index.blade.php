<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('fonts/css/font-awesome.min.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <style type="text/css">
        	#wrapper{
        		width: 500px;
        		margin: 0 auto;
        		vertical-align: center;
        		margin-top: 50px;
        	}
        </style>
</head>
<body> -->
	<div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form action="{{ url('admin/login') }}" method="post">
                    <h1>Login Form</h1>
                    {!! csrf_field() !!}
                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div>
                        <button class="btn btn-default submit">Log in</button>
                        <!-- <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a> -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <!-- <p class="change_link">New to site? -->
                            <!-- <a href="{{ url('/register') }}" class="to_register"> Create Account </a> -->
                        <!-- </p> -->
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><img src="{{ asset('images/logo.png')}}" style="width: 200px; width: 150px;"></h1>

                            <p>©2017 All Rights Reserved. Microgenesis. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>

 
     <!--  <script type="text/javascript">
      	$(window).ready(function(){
      		$(".submit").click(function(){
      			email = $("#email").val();
      			password = $("#password").val();

      			$.ajax({
      				type:"GET",
      				url: login,
      				data: {email:email,password:password},
      				success: function(){
      					window.location.href('admin.dashboard');
      				}
      			})
      		})
      	})
      </script> -->
<!-- </body>
</html> -->