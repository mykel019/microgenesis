@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/tenable.png')}}" class="img-responsive responsive-img">
        <br>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-4">
      
       <img src="{{asset('images/tenable/security.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Continuous Network Monitoring & Vulnerability Analytics</strong></h5>
       <p>SecurityCenter has changed the security landscape with its innovative continuous network monitoring and vulnerability analytics. Now you can truly measure, analyze and visualize the effectiveness of your security program, based on high level business objectives</p>
       <p> <a href="https://www.tenable.com/products/securitycenter" class="btn btn-info">Learn more</a></p>
      </div>

      <div class="col-md-4">
       
       <img src="{{asset('images/tenable/Nessus.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Self-service Access Governance</strong></h5>
       <p>Give business users the power to review and manage permissions without IT assistance and automatically enforce business rules</p>
       <p> <a href="https://www.tenable.com/products/nessus-vulnerability-scanner" class="btn btn-info">Learn more</a></p>
      </div>

      <div class="col-md-4">
     
       <img src="{{asset('images/tenable/PVS.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Self-service Access Governance</strong></h5>
       <p>Give business users the power to review and manage permissions without IT assistance and automatically enforce business rules</p>
       <p><a href="http://www.varonis.com/products/dataprivilege/" class="btn btn-info">Learn more</a></p>
      </div>


    </div>

    <br>
    
</div>

@endsection