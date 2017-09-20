@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/gigamon.png')}}" class="img-responsive responsive-img">
        <br>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
      <h3><strong>Traffic Intelligence</strong></h3>
      <p>GigaSMART® technology incorporates high-performance compute engines to extend the intelligence and value of the Gigamon Visibility Fabric™ architecture by modifying, transforming, and correlating traffic from various sources to the tools you rely upon for management, monitoring, and security.</p>
      <img src="{{asset('images/gigamon/guard.jpg')}}" class="img-responsive responsive-img">
      <h3><strong>Visiblity Fabric</strong></h3>
      <p>A versatile and comprehensive visibility architetuire that provides a platform to enable insight infrastructure blind spots.</p>
      </div>

      <div class="col-md-5 col-md-offset-1">
       
       <ul>
         <li>Adaptive Packet Filtering</li>

         <li>Application Session Filtering</li>

         <li>De-duplication</li>

         <li>FlowVUE™</li>

         <li>GTP Correlation</li>

         <li>Header Stripping</li>

         <li>Load Balancing</li>

         <li>Masking</li>

         <li>NetFlow Generation</li>

         <li>Packet Slicing</li>

         <li>Source Port Labeling</li>

         <li>SSL Decryption</li>

         <li>Time Stamping</li>

         <li>Tunneling</li>

       </ul>
      </div>
    </div>

    <br>

    <div class="row">

      <div class="col-md-6">
        <h4><strong>GigaVUE H Series</strong></h4>
        <p>The GigaVUE H Series Visibility Fabric nodes provides advanced visibility for enterprise and service provider infrastructure with a range of solutions from compatct to modular options to meet today's and tomorrow needs</p>
        <img src="{{asset('images/gigamon/GigaVUE-HD-Series.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">GigaVUE HD Series</h6>
        <br><br><br>
        <img src="{{asset('images/gigamon/GigaVUE-HC2.jpg')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">GigaVUE-HC2</h6>

        <br><br><br>


        <img src="{{asset('images/gigamon/GigaVUE-HB1.jpg')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">GigaVUE-HB1</h6>
        <br><br>

        <h3 class="blue">Visibility Fabric</h3>
        <br>
        <p>A versatile and comprehensive visibility architecture that provides a platform to enable insight into infrastructure blind spots.</p>
        <br><br>


        <h3 class="blue">Aggregation</h3>
        <br>
        <p>High-volume traffic monitoring of your infrastructure using either a turnkey Gigamon platform or GigaVUE-OS software on white box hardware and clustering with the Visbility Fabric</p>
        <br><br>


        <img src="{{asset('images/gigamon/GigaVUE-TA10.png')}}" class="img-responsive responsive-img">
          <h6 class="blue text-center">GigaVUE-TA10</h6>
        <br><br>

        <img src="{{asset('images/gigamon/GigaVUE-TA40.png')}}" class="img-responsive responsive-img">
          <h6 class="blue text-center">GigaVUE-TA40</h6>
        <br>

      
      </div>



      <div class="col-md-6">
        <h4><strong>GigaVUE G Series</strong></h4>
        <p>The classic GigaVUE fabric node series continues to provide visibility for smaller standalone environments with limited connections.</p>

        <br><br>

        <img src="{{asset('images/gigamon/GigaVUE-2404.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">GigaVUE-2404</h6>
        <br><br><br>

        <img src="{{asset('images/gigamon/GigaVUE-420.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">GigaVUE-420</h6>
        <br><br><br>

        <img src="{{asset('images/gigamon/G-SECURE-0216.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">G-SECURE-0216</h6>
        <br><br><br><br><br><br><br><br>

        <img src="{{asset('images/gigamon/GigaVUE-VM.jpg')}}" class="img-responsive responsive-img">

        <br><br><br><br><br><br><br><br><br>

        <img src="{{asset('images/gigamon/GigaVUE-OS-on-a-White-Box.png')}}" class="img-responsive responsive-img">

      </div>

    </div>



    <div class="row">

      <div class="col-md-6">
         <h3 class="blue"><strong>Fabric Management</strong></h3>
        <p>A "single pane of glass" management system for centralized management and configuration spanning physical and virtual fabric nodes across the Visibility Fabric.</p>
        <br><br>

        <h3 class="blue"><strong>Network TAP's</strong></h3>
        <p>Fast and reliable, optical active passiv and BIDI network TAP's provide non-intrusive access and visibility to network traffic</p>
          <br>

        <img src="{{asset('images/gigamon/Optical-Passive-High-Density-TAPs.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">Optical Passive High Density TAPs</h6>
        <br>

        <img src="{{asset('images/gigamon/Optical-Passive-TAPs.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">Optical Passive High Density TAPs</h6>
      </div>


      <div class="col-md-6"> 
        <img src="{{asset('images/gigamon/GigaVUE-FM.jpg')}}" class="img-responsive responsive-img">
        <br><br><br><br><br><br><br><br>
        <img src="{{asset('images/gigamon/Optical-Passive-BiDi-TAP.png')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">Optical Passive BiDi TAP</h6>
        <br><br>
        <img src="{{asset('images/gigamon/Active-TAPs.jpg')}}" class="img-responsive responsive-img">
        <h6 class="blue text-center">Active TAPs</h6>
      </div>


    </div>
    
</div>

@endsection