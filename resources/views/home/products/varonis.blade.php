@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/varonis.png')}}" class="img-responsive responsive-img">
        <br>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
       <h2 class="blue"><strong>Data Audit & Protection</strong></h2>
       <img src="{{asset('images/varonis/advantage.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>The leader in data protection and file analysis</strong></h5>
       <p>Ensure that only the right people have access to the right data at all times, monitor use alert on abuse</p>
       <p>Try it for: <a href="http://www.varonis.com/products/datadvantage/" class="btn btn-info">Free</a></p>
      </div>

      <div class="col-md-6">
       <h2 class="blue"><strong>Data Access Governance</strong></h2>
       <img src="{{asset('images/varonis/Dataprivilege.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Self-service Access Governance</strong></h5>
       <p>Give business users the power to review and manage permissions without IT assistance and automatically enforce business rules</p>
       <p>Try it for: <a href="http://www.varonis.com/products/dataprivilege/" class="btn btn-info">Free</a></p>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
       <h2 class="blue"><strong> </strong></h2>
       <img src="{{asset('images/varonis/IDU-Classification-Framework.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Find and lockdown sensitive information</strong></h5>
       <p>Quickly discover where sensitive information is exposed, prioritize vulnerable data, and lock it down without interrupting business</p>
       <p>Try it for: <a href="http://www.varonis.com/products/data-classification-framework/" class="btn btn-info">Free</a></p>
      </div>

      <div class="col-md-6">
       <h2 class="blue"><strong>Enterprise Search & Discover</strong></h2>
       <img src="{{asset('images/varonis/Datanswers.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Security minded enterprise search and discovery</strong></h5>
       <p>Deliver relevant search result to the right people, making your business more productive and limiting the risk of exposing sensitive information</p>
       <p>Try it for: <a href="http://www.varonis.com/products/datanswers/" class="btn btn-info">Free</a></p>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
       <h2 class="blue"><strong></strong></h2>
       <img src="{{asset('images/varonis/Datalert.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>User Behavioral Analytics</strong></h5>
       <p>Automatically detect suspiious and unwanted activity across disparate platforms through analytics and in real-time, helping you spot issues and prevent data breaches</p>
       <p>Try it for: <a href="http://www.varonis.com/products/datalert/" class="btn btn-info">Free</a></p>
      </div>

      <div class="col-md-6">
       <h2 class="blue"><strong>Enterprise File Sync & Share</strong></h2>
       <img src="{{asset('images/varonis/Datanywhere.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Cloud enable your existing file shares</strong></h5>
       <p>Sync and share all or part of your file share data in minutes on your own servers without moving data or making changes to your infrastructure - a secure, private Dropbox alternative</p>
       <p>Try it for: <a href="http://varonis.wpengine.com/products/datanywhere/" class="btn btn-info">Free</a></p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
         <h2 class="blue"><strong>Retention & Migration</strong></h2>
       <img src="{{asset('images/varonis/transport.png')}}" class="img-responsive responsive-img">
       <h5 class="blue"><strong>Automate your data retention policies</strong></h5>
       <p>Create rules to find and migrate, achieve or delete files based on content, age, file, type, access activity and more.</p>
       <p>Try it for: <a href="http://www.varonis.com/products/data-transport-engine/" class="btn btn-info">Free</a></p>
      </div>
    </div>


    
</div>

@endsection