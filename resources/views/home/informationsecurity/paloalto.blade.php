@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container bg-3 text-center" style="padding: 60px;" >
  <div class="row">
    <!-- <h2 class="margin"></h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
    
    <!--     <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/paloalto new.png')}}" class="img-responsive" style="margin: 0 auto;">
        </div> -->

    <!-- <div class="border-line"></div> -->

        <iframe src="https://www.paloaltonetworks.com/syndication/index.html" frameborder="0" style="width: 700px; height: 700px; overflow: auto;">
        </iframe>

    </div>
    <br>

    <div class="row">
      <div class="container">
        
        <div class="col-md-12">
          <h2 class="blue"><b>Firewall Platform</b></h2>
          <br>
          <p class="indent">Palo Alto Networks offer a full line of next-generation security appliances that range from the PA-200, designed for enterprise remote offices, to the PA-7050, which is a modular chassis designed for high-speed data centers. Its platform architecture is based on its single pass software engine and uses function-specific processing for networking, security, threat prevention, and management to deliver predictable performance. The same firewall functionality that is delivered in the hardware appliances is also available in the VM-Series virtual firewall, allowing you to secure your virtualized and cloud-based computing environments using the same policies applied to your perimeter or remote office firewalls.</p>
        </div>

      </div>

    </div>

    <br>

    <div class="row">
        <div class="col-md-3">
          <img src="{{asset('images/paloalto/PA-7050-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">PA-7050</h3>
          <p>Deploy next-generation security in your data centers without compromising performance.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-7000-series.html" target="_blank" class="btn btn-info">Read More</a></p>
        </div>

        <div class="col-md-3">
          <img src="{{asset('images/paloalto/PA-5000-Series-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">PA-5000 Series</h3>
          <p>Deploy the PA-5060, PA-5050, and PA-5020 to protect high-speed data centers, server farms, and service provider environments with next-generation firewall security.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-5000-series.html" target="_blank" class="btn btn-info">Read More</a></p>
        </div>

        <div class="col-md-3">
          <img src="{{asset('images/paloalto/PA-3000-Series-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">PA-3000 Series</h3>
          <p>Utilize the PA-3050 and the PA-3020 to protect medium-to-large branch enterprise networks with next-generation firewall security.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-3000-series.html" target="_blank" class="btn btn-info">Read More</a></p>
        </div>

        <div class="col-md-3">
          <img src="{{asset('images/paloalto/PA-500-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">PA-500</h3>
          <p>Protect medium-to-large branch offices and medium enterprise networks with next-generation firewall security from the PA-500.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-500.html" target="_blank" class="btn btn-info">Read More</a></p>
        </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-3">
          <img src="{{asset('images/paloalto/PA-200-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">PA-200</h3>
          <p>Secure medium enterprises and small enterprise branch offices with next-generation firewall security using the PA-200.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-200.html" target="_blank" class="btn btn-info">Read More</a></p>
      </div>


       <div class="col-md-3">
          <img src="{{asset('images/paloalto/VM-Series-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">VM Series</h3>
          <p>The VM-Series supports the very same next-generation firewall and advanced threat prevention features available in our physical form factor appliances, allowing you to safely enable applications flowing into, and across your private, public and hybrid cloud computing environments.</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/virtualized-next-generation-firewall/vm-series.html" target="_blank" class="btn btn-info">Read More</a></p>

      </div>

       <div class="col-md-3">
          <img src="{{asset('images/paloalto/GlobalProtect-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Global Protect</h3>
          <p>GlobalProtect provides a unique, integrated mobile security solution to safely enable mobile devices for business use. It consists of three key components: GlobalProtect Gateway (available on the Palo Alto Networks next-generation network security platform), GlobalProtect Mobile Security Manager (available on the Palo Alto Networks GP-100), and GlobalProtect App (available for iOS and Android devices).</p>
          <p class="blue"><a href="https://www.paloaltonetworks.com/products/secure-the-network/next-generation-firewall/pa-5000-series.html" target="_blank" class="btn btn-info">Read More</a></p>

      </div>

       <div class="col-md-3">
          <img src="{{asset('images/paloalto/Traps-300x225.png')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Traps</h3>
          <p>Traps Advanced Endpoint Protection is a complete paradigm shift from identification to pure prevention. Our solution requires no definitions updates; protects unpatched systems; requires no hardware; is compatible with all physical or virtual Windows platforms, including terminals, VDI, VMs and embedded systems; protects all processes, including third-party; and most importantly, it doesn’t need prior knowledge of an attack in order to prevent it.</p>
        

      </div>
    </div>
    
  </div>
</div>

@endsection