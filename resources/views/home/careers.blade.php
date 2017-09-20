@extends('app')

@section('css')
	<style type="text/css">
		#careers{
			background: url('../images/banner1.jpg');
      		background-size: cover;
      		overflow: hidden;
      		height: 100%;
      		position: relative;
      		padding-top: 50px;
      		padding-bottom: 50px;
      		vertical-align: middle!important;
			/*position: relative;*/
		}
	</style>
@endsection


@section('content')

<div id="careers">
	<div class="container-fluid">
		<div id="overlay"></div>
		<div class="careers-content">
			<h1 class="text-center" style="color: white;font-size: 48px;"><b>We want you</b></h1>
			<br><br>
			<center><a href="" class="btn btn-default" style="padding: 10px  20px;">Apply Now</a></center>
		</div>
	</div>
</div>

@endsection