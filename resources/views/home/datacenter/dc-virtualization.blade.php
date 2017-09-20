@extends('app')
@section('content')

<div class="divider hidden-xs"></div>

<div id="about" class="container bg-3 text-center" >
  <div class="row">
    <h2 class="margin">VIRTUALIZATION</h2>
    <div class="border-line"></div>


    <div class="row">
      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/product-logo/vmware.png')}}";">
          <h3>VMWare</h3>
          <p>Virtualization is at the heart of VMware’s “one cloud, any application, any device” architecture. It’s the single most effective way to reduce IT expenses while boosting efficiency and agility – not just for large enterprises, but for small and midsize businesses too..</p>
          <p><a href="https://www.vmware.com/products/" class="btn btn-info" target="_blank">Learn More</a></p>
        </div>
      <!-- </a> -->

      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/product-logo/microsoft.png')}}">
          <h3>Microsoft Hyper V</h3>
          <p>Get enterprise-class virtualization for your datacenter and hybrid cloud
Bolster IT efficiency and flexibility with faster virtualized application deployment and maintenance. Built on Hyper-V, included in Windows Server, Microsoft virtualization solutions help reduce costs by consolidating more workloads on fewer servers. Increase IT agility and flexibility across on-premises and cloud resources with Microsoft virtualization solutions..</p>
          <p><a href="http://www.microsoft.com/en/server-cloud/solutions/virtualization.aspx" class="btn btn-info" target="_blank">Learn More</a></p>
        </div>
      <!-- </a> -->

    </div>

  </div>

  <br><br>
</div>

@endsection