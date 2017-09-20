@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
    
        <img src="{{asset('images/microsoft/EndOfSupportFeatured-624x220.png')}}" class="img-responsive responsive-img">
        <br>
        <p>If you are running Windows Server 2003 or SQL Server 2005, it's time to consider upgrading so you can take advantage of groundbreaking imporovements and performance</p>
    
      </div>

    </div>

    <div class="row">
      <p>Support has either ended ir will soon for the following products, which means no more security updates increased maintenance costs and potential compliance concerns.</p>
      <br>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/endsupport/jul14.png')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
        <p class="blue"><strong>Windows Server 2003 extended support ended on July 14, 2015</strong></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/endsupport/jul14.png')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
        
        <p class="blue"><strong>SQL Server 2005 extended support ends on April 12, 2016</strong></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/endsupport/jul14.png')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
        
        <p class="blue"><strong>SQL Server 2008 mainstream support ended on July 8, 2014 and is in extended support until July 9,2019</strong></p>
      </div>

      <br><br>
      
    <div class="row">
      <div class="col-md-12">
        <div class="row" style="background-color:  #D64040;color: #fff;padding: 20px;">
          <div class="col-md-12"></div>
            <span><strong>Now is the time to design a migration plan. We can help you move your applications and worloads that currently rely in Windows Server 2003 and SQL Server 2005 or 2008 to Windows Server 2012 R2 and SQL Server 2014 or Microsoft Azure SQL Database</strong></span>
            <br>
            <center><i class="fa fa-envelope-o fa-5x"></i></span></center>
            
        </div>
      </div>
    </div>

    <br>

    </div>
    <div class="row">
      <p class="blue text-center" style="font-size: 18px;"><strong>There is tremendous value available in upgrading to the latest version of SQL Server including:</strong></p>
      <div class="col-md-5 col-md-offset-1">
        <img src="{{asset('images/microsoft/endsupport/rocket.png')}}" class="img-responsive responsive-img" style="width: 250px; height: 250px;">
        <p class="text-center"><strong>Imporved performance</strong></p>
        <p>Benchmarks shows SQL Server 2014 performs 13x faster than SQL Server 2005 and 5.5x faster than SQL Server 2007</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('images/microsoft/endsupport/statistics.png')}}" class="img-responsive responsive-img" style="width: 250px; height: 250px;">
        <p class="text-center"><strong>In-memory technologies</strong></p>
        <p>Get additional performance gains from in-memory technologies for OLTP data warehousing and analytics</p>
      </div>
    </div>

    <div class="row">
      
      <div class="col-md-5 col-md-offset-1">
        <img src="{{asset('images/microsoft/endsupport/settings.png')}}" class="img-responsive responsive-img" style="width: 250px; height: 250px;">
        <p class="text-center"><strong>Simplified maintenance</strong></p>
        <p>Support includes security patching and maintenance updates, eliminating the expense of custom support agreements</p>
      </div>
      
      <div class="col-md-5">
        <img src="{{asset('images/microsoft/endsupport/Meter.png')}}" class="img-responsive responsive-img" style="width: 250px; height: 250px;">
        <p class="text-center"><strong>High availability</strong></p>
        <p>Rest assured that your mission critical applications are running with high availability and reliability with AlwaysOn</p>
      </div>
    </div>

</div>

@endsection