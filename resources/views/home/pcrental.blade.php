@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 30px 50px;">
  <div class="row">
    <h2 class="margin text-center">RENTAL BUSINESS</h2>
    <div class="border-line"></div>

    <div class="row"> 
        <p class="text-center"> At the early stages of any computer-based business where the company tries to test the waters to see how profit will look like, it is wiser to invest brand new equipment later on when the business has become more stable. At a time when your capital investment is limited to what your business needs, the best thing to consider is to rent equipment.</p>
 
       <p class="text-center"> At Microgenesis, we offer high quality desktops and laptops. We also make sure to give the customer flexibility for payment options whether they want it daily, weekly or monthly. More than that, all computer rental fees are inclusive of any maintenance costs to make sure all our units are always in good running condition to maintain the quality of our services.</p>
    </div>

    <br>  

    <div class="row">
      <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/laptop.png')}}" class="img-responsive responsive-img"><br><br>
       	<h3 class="text-center">LAPTOPS</h3>
    
      </div>

      <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/desktop.png')}}" width="249px" height="194px" class="img-responsive responsive-img"><br><br>
       	<h3 class="text-center">DESKTOPS</h3>
      </div>

        <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/projectors.png')}}"  width="249px" height="194px" class="img-responsive responsive-img"><br><br>
       	<h3 class="text-center">PROJECTORS</h3>
      </div>

          <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/venue.jpg')}}" class="img-responsive responsive-img"><br><br>
        <h3 class="text-center">TRAINING VENUE</h3>
  
      </div>
    </div>

  </div>
</div>

@endsection