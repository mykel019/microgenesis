@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/forescout.png')}}" class="img-responsive responsive-img">
        <br>
        <h4 class="text-center">ForeScout products provide the unique ability to see devices, including non-traditional devices, the instant they conenct to the network. They enforce policy-based control of these devices, orchestrate information sharing and automate worlkflows among disparate security and IT management tools. Here's how:</h4>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-5">
      <p><b>ForeScout CounterACT™</b> provides real-time discovery, control, monitoring and policy-based remediation of managed, unmanaged and non-traditional devices with or without security agents. <a href="https://www.forescout.com/products/counteract/see/" class="blue">See More</a>&nbsp;&nbsp;<a href="https://www.forescout.com/products/counteract/control/" class="blue" target="_blank">Control more</a></p>
      <br>
      <p><b>ForeScout Extended Modules</b> extend the capabilities of CounterACT to a vast range of system infrastructure and third-party security management tools. <a href="https://www.forescout.com/products/extended-modules/orchestrate/" class="blue" target="_blank">Orchestrate more</a></p>
      
      </div>

      <div class="col-md-5 col-md-offset-1">
       <p><b>CounterACT Enterprise Manager</b> provides centralized management and control of distributed virtual and physical CounterACT appliances. <a href="https://www.forescout.com/products/enterprise-manager/" class="blue" target="_blank">Manage More</a></p>
       <br>
       <p><b>ControlFabric™ Architecture</b> enables CounterACT and other solutions to exchange information and resolve network security and operational ussues.<a href="https://www.forescout.com/wp-content/uploads/2015/12/ForeScout-ControlFabric-Architecture-Brochure-1.pdf" class="blue" target="_blank">Learn More</a></p>
       
      </div>

    </div>

    <br>
    
</div>

@endsection