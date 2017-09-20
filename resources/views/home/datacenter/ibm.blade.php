@extends('app')

@section('css')

@endsection

@section('content')
<div class="divider"></div>

<div class="container" >
  <div class="row">
    <h2 class="margin"></h2>
    <!-- <div class="border-line"></div> -->

    <div class="row center">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/ibm.png')}}"><br><br>
        
          <h3>Data storage made to empower your business</h3>
          <!-- <div class="border-line"></div> -->

          <p>IBM Storage efficiently delivers data to enchance and accelerate decision-making in the cloud era</p>
          <p>Solutions: <a href="http://www-03.ibm.com/systems/storage/data-storage-solutions.html" class="blue">http://www-03.ibm.com/systems/storage/data-storage-solutions.html</a></p>
        </div>
    </div>

    <div class="border-line"></div>

    <div class="row">
      <div class="col-md-6">
        <h2>Storage System</h2>
        <h4>IBM Storage is designed for the cloud era</h4>
          <p>IBM DS8000 Systems</p>
          <p>IBM LTO Gen 7 Tape Solutions</p>
          <p>IBM FlashSystem</p>
          <p>IBM Spectrum Storage</p>
          <p>IBM Storwize All-flash</p>
      </div>

      <div class="col-md-6">
        <h2>Storage System</h2>
        <p>Solutions: <a href="http://www-03.ibm.com/systems/storage/data-storage-solutions.html" class="blue">http://www-03.ibm.com/systems/storage/data-storage-solutions.html</a></p>
        <p>Solutions: <a href="http://www-03.ibm.com/systems/storage/data-storage-solutions.html" class="blue">http://www-03.ibm.com/systems/storage/data-storage-solutions.html</a></p>
        <p>Solutions: <a href="http://www-03.ibm.com/systems/storage/data-storage-solutions.html" class="blue">http://www-03.ibm.com/systems/storage/data-storage-solutions.html</a></p>
      </div>
    </div>

   
  </div>
  <br><br>
</div>


@endsection