<!-- 
<html>
<head>
	<title>XeroSource</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css')}}">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
		
</head>
<body> -->


	<a class="mobile">Menu</a>
	<div id="container">
		<div class="sidebar">

	        <div class="navbar nav_title text-center" style="border: 0;">
	            <!-- <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Mgenesis.com</span></a> -->
	        </div>
	        <div class="clearfix"></div>

	        <!-- menu prile quick info -->
	        <div class="profile">
	            <div class="profile_pic text-center">
	                <img src="{{ asset('images/user.png') }}" alt="..." class="img-circle profile_img img-thumbnail" width="100px;" height="100px;">
	            </div>
	            <div class="profile_info" style="color: #ccc; font-size: 16px;">
	                <span>Welcome,</span>
	                <h4>{{ ucwords(Auth::User()->name) }}</h4>
	            </div>
	        </div>

				<ul id="nav-admin">
					<li><a class="selected" href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Dashboard</a></li>
					<li><a href="#"><i class="fa fa-user" aria-hidden="true" class="side-menu"></i> &nbsp;&nbsp;&nbsp;Applicant</a></li>
					<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" class="side-menu"></i> &nbsp;&nbsp;&nbsp;Schedule</a></li>
					<li><a href="#"><i class="fa fa-cogs" aria-hidden="true" class="side-menu"></i> &nbsp;&nbsp;&nbsp;Settings</a></li>
					<li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true" class="side-menu"></i> &nbsp;&nbsp;&nbsp;News and Updates</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>

<!-- 		<div class="sidebar-footer hidden-small">   
            <a href="{{ url('settings') }}" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div> -->



		</div>
	</div>

	
	<!-- 	<div class="content">
			<h1>Dashboard</h1>
			<p>Here you can do stuff</p> -->


<!-- 			<div id="box">
				<div class="box-top">
					News
				</div>
				<div class="box-panel">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget mi commodo, scelerisque enim eget, pharetra nibh. Sed pulvinar, libero vitae hendrerit rhoncus, ex massa vestibulum mi, ac blandit ante tortor nec nunc. Nullam nec arcu consectetur, auctor nisi nec, vestibulum odio. Donec commodo urna in tempus consequat. Pellentesque in elit eleifend, accumsan nunc vitae, ullamcorper tellus. Curabitur hendrerit quam vitae pretium imperdiet. Pellentesque eu bibendum augue. Nulla vestibulum luctus purus nec tempor. Vivamus elementum tortor sed dictum auctor. Fusce eleifend molestie sem, in lobortis diam. Nam lacus justo, molestie eu risus eget, placerat maximus lectus. Integer ac malesuada lectus. Cras blandit aliquam justo sit amet luctus.
				</div>
			</div>
		</div>
	</div>
 -->
