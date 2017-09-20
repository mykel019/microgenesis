@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/microsoft/azure.png')}}" class="img-responsive responsive-img">
        <br>
        <h3 class="blue text-center"><strong>Get scalable storage without breaking the bank</strong></h3>
        <br>
        <h3 class="blue text-center"><strong>Try an agile platform to meet your needs</strong></h3>

        <img src="{{asset('images/microsoft/azure/Azure-banner.jpg')}}" class="img-responsive responsive-img">
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/microsoft/azure/AzureAccount.png')}}" class="img-responsive responsive-img">
      </div>
      <div class="col-md-6">
        <h4 class="blue"><strong>Azure is Microsoft's cloud platform</strong></h4>
        <br>
        <p>It's growing collection of integrated analytics, computing, database, mobile, networking, storage, and web services all supported by a network of Microsoft-managed datacenters</p>
        <br>
        <p>Microsoft Azue can help you:</p>
        <ul>
          <li>Move faster</li>
          <li>Achieve more</li>
          <li>Save money</li>
        </ul>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <p>Azure's pay-as-you-go services can quickly scale up or down to match demand, so you only pay for what you use. Per-minute billing for popular infrastructure services like compute, storage and bandwidth mean you're always getting unbeatable price for performance. And Azure works seamlessly with other Microsoft software and services to help you keep your critical information safe.</p>
        <br><br>
        <h3><strong>"Our growers and buyers don't care about our IT systems, but they do care when we can't ship product or issue an invoice. Our brand rests on the continuity of our IT systems, which are now more available running in Azure."</strong></h3>
        <br><br>
        <p class="text-center">-Andrew Goodin, Global Manager of Information Systems, Zespri International</p>
      </div>
    </div>

    <br>

    <div class="row">
      <h1 class="blue text-center"><strong>The benefits of Azure</strong></h1>
      <br>
      <div class="col-md-4">
        <img src="{{asset('images/microsoft/azure/Open-and-Flexible.png')}}" class="img-responsive responsive-img">
        <h2 class="blue text-center"><strong>Open and flexible</strong></h2>
        <p>Azure supports the broadest selection of operating systems, programming languages, frameworks, tools database and devices</p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/azure/Easy-Integration.png')}}" class="img-responsive responsive-img">
        <h2 class="blue text-center"><strong>Easy integration</strong></h2>
        <p>Azure integrates with your existing IT environment through a large network of secure private connections, hybrid databases and storage solutions</p>

     
      </div>
      <div class="col-md-4">
        <img src="{{asset('images/microsoft/azure/Economical-and-Scalable.png')}}" class="img-responsive responsive-img">
        <h2 class="blue text-center"><strong>Econommical and scalable</strong></h2>
        <p>Azure's pay-as-you-go services can scale up or down to match demand so you only pay for what you use.</p>

        
      </div>
    </div>

</div>

@endsection