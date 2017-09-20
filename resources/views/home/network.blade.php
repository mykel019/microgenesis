@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container bg-3 text-center" style="padding: 20px 40px;">
  <div class="row">
    <h2 class="margin">NETWORK & COMMUNICATIONS</h2>
    <div class="border-line"></div>


    <div class="row">
      <div class="col-md-4 col-xs-12">
        <img src="{{asset('images/product-logo/cisco.png')}}";">
       	<h3>CISO</h3>
       	<p>Cisco is the worldwide leader in IT and networking who helps companies of all sizes transform how people connect, communicate, and collaborate. Cisco's products and services focus upon three market segments—enterprise and service provider, small business and the home..</p>
      </div>

      <div class="col-md-4 col-xs-12">
        <img src="{{asset('images/product-logo/huawei.png')}}";">
       	<h3>HUAWEI</h3>
       	<p>Huawei Technologies Co Ltd is the world's largest telecom equipment maker and China’s largest telephone-network equipment maker..</p>
      </div>

        <div class="col-md-4 col-xs-12">
        <img src="{{asset('images/product-logo/hp.png')}}";">
       	<h3>HP</h3>
       	<p>Hewlett-Packard is an American multinational information technology company headquartered in Palo Alto, California. Their  vision is to create technology that makes life better for everyone, everywhere.</p>
      </div>
    </div>

  </div>

  <br><br>
</div>

@endsection