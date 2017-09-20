@extends('app')
@section('content')

<div class="divider hidden-xs"></div>

<div id="about" class="container bg-3 text-center" >
  <div class="row">
    <h2 class="margin">Certification & Education</h2>
    <div class="border-line"></div>


    <div class="row">
      <h5>Microgenesis is the RedHat Certified Training Partner in the Philippines. We are also a Pearson VUE® Authorized Test Center.</h5>
      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/redhat.png')}}"; width="310;" height="170" ">
          <!-- <h3>Redhat</h3> -->
          <p></p>
          <p><a href="{{url('redhat')}}" class="btn btn-info">Learn More...</a></p>
        </div>
      <!-- </a> -->

      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/product-logo/pearson vue.png')}}">
          <!-- <h3>PearsonVUE</h3> -->
          <p>.</p>
          <p><a href="{{url('pearsonvue')}}" class="btn btn-info">Learn More...</a></p>
        </div>
      <!-- </a> -->

    </div>

  </div>
</div>

@endsection