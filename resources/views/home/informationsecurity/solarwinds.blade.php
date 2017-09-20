@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container">
  <!-- <div class="row"> -->
    <!-- <h2 class="margin"></h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/solarwinds.png')}}" class="img-responsive" style="margin: 0 auto; margin-top: 20px;">
        </div>
    </div>

    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <center><h3>Network Management Software & Network Tools</h3>
          <p>Network performance management software that gives you the power to monitor and manage your network.</p>
          </center>
        </div>

      </div>

    </div><br>

    <div class="row">
        <div class="col-md-3">
          <img src="{{asset('images/solarwinds/Network-Performance-Monitor.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Performance Monitor</h3>
          <p>Fault, availability, and performance monitoring for networks of all sizes.</p>
          <ul>
            <li>Improves operational efficiency with out-of-the-box, customizable dashboards, alerts, and reports</li>
            <li>Quickly identify network and application reliability and performance issues with deep packet inspection and analysis</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-performance-monitor" class="blue" target="_blank">Learn More</a></p>

        </div>

        <div class="col-md-3">
          <img src="{{asset('images/solarwinds/IP-Control-Bundle.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">IP Control Bundle</h3>
          <p>Find and fix IP conflicts in two clicks.</p>
          <ul>
            <li>Combines IP Address Manager and User Device Tracker to eliminate IP conflicts.</li>
            <li>Saves time with integrated DHCP, DNS and IP address management.</li>
            <li>Imporoves network reliability with switch, WAP, port, and endpoint monitoring</li>
          </ul>
          <p><a href="http://www.solarwinds.com/ip-control-bundle" class="blue" target="_blank">Learn More</a></p>

        </div>

        <div class="col-md-3">
          <img src="{{asset('images/solarwinds/Network-Bandwidth-Analyzer-Pack.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Bandwidth Analyzer Pack</h3>
          <p>Comprehensive network bandwidth analysis and performance monitoring.</p>
          <ul>
            <li>Detect, diagnose, and resolve network performance issues</li>
            <li>Identify bandwidth hogs and see which applications are using most bandwidth</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-bandwidth-analyzer-pack" class="blue" target="_blank">Learn More</a></p>

        </div>

        <div class="col-md-3">
          <img src="{{asset('images/solarwinds/Network-Configuration-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Configuration Manager</h3>
          <p>Centralized network device change and configuration management software.</p>
          <ul>
            <li>Automate network configuration backups, comparisons, and rollback</li>
            <li>Improve security and reduce downtime with real-time configuration change alerts and compliance management</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-configuration-manager" class="blue" target="_blank">Learn More</a></p>

        </div>
    </div><br>



    <div class="row">
      <div class="col-md-3">
          <img src="{{asset('images/solarwinds/Network-Troubleshooting-Bundle.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Troubleshooting Bundle</h3>
          <p>Alert, isoalte, and resolve network outages and performance.</p>
          <ul>
            <li>Monitor and troubleshoot critical network path performance issues with a customizable Web console</li>
            <li>Centrally monitor and manage network device configurations, and recieve real-time change alerts</li>
            <li>Analyze network traffic, bandwidth performance, and traffic patterns by monitoring flow data</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-troubleshooting-bundle" class="blue" target="_blank">Learn More</a></p>
        
      </div>

       <div class="col-md-3">
          <img src="{{asset('images/solarwinds/IP-Address-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">IP Address Manager</h3>
          <p>Centarlly manage your entire IP infrastructure.</p>
          <ul>
            <li>Eliminate IP address conflicts with centralized IP infrastructure management, monitoring, alerting and reporting</li>
            <li>Consolidate multi-vendor DHCP/DNS management with a single, integrated interface</li>
          </ul>
          <p><a href="http://www.solarwinds.com/ip-address-manager" class="blue" target="_blank">Learn More</a></p>

      </div>

       <div class="col-md-3">
          <img src="{{asset('images/solarwinds/User-Device-Tracker.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">User Device Tracker</h3>
          <p>Automated device tracking and switch port management.</p>
          <ul>
            <li>Enhance network security by quickly finding missing and rogue device, as well as recieving alerts when a user or device connects to the network</li>
            <li>Get critical insight into switch port utilization to optimize and plan capacity</li>
          </ul>
          <p><a href="http://www.solarwinds.com/user-device-tracker" class="blue" target="_blank">Learn More</a></p>

      </div>

       <div class="col-md-3">
          <img src="{{asset('images/solarwinds/NetFlow-Traffic-Analyzer.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">NetFlow Traffic Analyzer</h3>
          <p>Network traffic and bandwidth utilization in an easy-to-view dashboard.</p>
          <ul>
            <li>Monitor business critical application performance and ensure optimal network utilization and bandwidth usage</li>
            <li>Monitor network traffic usage by application, user, protocol or location and detect network traffic anomalies</li>
          </ul>
          <p><a href="http://www.solarwinds.com/netflow-traffic-analyzer" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>

    <br>

    <div class="row">
      <div class=" col-md-4">
        <img src="{{asset('images/solarwinds/VoIP-Network-Quality-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">VoIP & Network Quality Manager</h3>
          <p>VoIP and WAN performance monitoring, troubleshooting, and service level dashboard.</p>
          <ul>
            <li>Ensure performance of your VoIP infrastructure by monitoring and troubleshooting call quality metrics</li>
            <li>Monitor WAN service level performance using Cisco IP SLA technology</li>
          </ul>
          <p><a href="http://www.solarwinds.com/voip-network-quality-manager" class="blue" target="_blank">learn More</a></p>
      </div>
      <div class="col-md-4">
         <img src="{{asset('images/solarwinds/Engineers-Toolset.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Engineer’s Toolset</h3>
          <p>Diagnose, troubleshoot, and fix network issues with over 50 must have network tools.</p>
          <ul>
            <li>Discover, monitor, configure, and diagnose network infrastructure issues with over 50 must-have network tools</li>
            <li>One-click integration with SolarWinds network management products</li>
          </ul>
          <p><a href="http://www.solarwinds.com/engineers-toolset" class="blue" target="_blank">learn More</a></p>
      </div>
      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Engineers-Toolset.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Topology</h3>
          <p>Map your network automatically in just minutes.</p>
          <ul>
            <li>Automatically discover and map your Layer 2 and Layer 3 network topology, switch ports, VLANs, subnets, and inventory in just minutes</li>
            <li>Auto-detect changes and export diagrams to Vision, Orion Network Atlas, PDF, and PNG</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-topology-mapper" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>

    <br>

    <div class="row">
      <h2><strong>System Management Software</strong></h2>
      <p><strong>Manage, monitor and troubleshoot application performance and availability</strong></p>
      <hr>

      <h2>Why SolarWinds for Systems Mangement?</h2>

      <h3><strong>Application-aware infrastructure monitoring</strong></h3>
      <p>Get an instant view of the application relationships, regardless of the platforms or technologies</p>

      <h3><strong>Expert-level power, even for beginners</strong></h3>
      <p>detailed performance monitoring software that's intuitive and easy to configure, customize and use.</p>

      <h3><strong>Scalability to support your environment</strong></h3>
      <p>Our systems management software is designed to suit environment of all sizes.</p>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/solarwinds/Application-Stack-Management-Bundle.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Applicatiion Stack Management Bundle</h3>
          <p>Total application visibility across application and infrastructure layers.</p>
          <ul>
            <li>Quickly identify the root cause of application issues within a unified dashboard</li>
            <li>Full visibility into the performance of the environment across all layers </li>
            <li>Understand relationship and dependencies in the application stack</li>
          </ul>
          <p><a href="http://www.solarwinds.com/application-server-management-software" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-6">
         <img src="{{asset('images/solarwinds/Server-Application-Monitor.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Server & Application Monitor</h3>
          <p>Performance monitoring for servers and hundreds of applications.</p>
          <ul>
            <li>Reliable and scalable - see performance data in about an hour</li>
            <li>Detailed performance metrics for 200+ applications </li>
            <li>Extend monitoring to custom applications in minutes</li>
          </ul>
          <p><a href="http://www.solarwinds.com/server-application-monitor" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>

    <br>


    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/solarwinds/Virtualization-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Virtualization Manager</h3>
          <p>Performance, troubleshooting, capacity and sprawl management from VM to datastore.</p>
          <ul>
            <li>Optimize performance, capacity, and sprawl with prebuilt dashboards</li>
            <li>Troubleshoot across application, virtualization, and storage layers </li>
            <li>Management actions allow you to remediate issues without leaving the console</li>
          </ul>
          <p><a href="http://www.solarwinds.com/virtualization-manager" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-6">
        <img src="{{asset('images/solarwinds/Storage-Resource-Monitor.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Storage Resource Monitor</h3>
          <p>Capacity and performance across multi-vendor storage arrays in context of your application.</p>
          <ul>
            <li>Real-time storage visibility into multi-vendor NAS and SAN arrays</li>
            <li>Agentless NAS and SAN monitoring to include performance details </li>
            <li>Automated storage capacity planning</li>
          </ul>
          <p><a href="http://www.solarwinds.com/storage-resource-monitor" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/solarwinds/Web-Performance-Monitor.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Web Performance Monitor</h3>
          <p>Troubleshoot web based performance issues for both internal and customer facing applications.</p>
          <ul>
            <li>Securely monitor internal web-based applications (CRM, Intranet, etc) - no agents needed!</li>
            <li>API/Web Service/SaaS user experience testing from multiple locations </li>
            <li>Website and infrastructure performance in a single pane of glass</li>
          </ul>
          <p><a href="http://www.solarwinds.com/web-performance-monitor" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>


    <div class="row">
      <h2><strong>IT Security Software</strong></h2>
      <p><strong>Powerful, affordable and easy-to-use solutions to make everything in IT more secure</strong></p>
      <hr>

      <p>Why SolarWinds for IT Security</p>

      <h3><strong>Powerful</strong></h3>
      <p>Enjoy extensive product functionality built on real IT security incidents and needs.</p>

      <h3><strong>Affordable</strong></h3>
      <p>Buy the product that solves your immediate problem, and add coverage as your environment evolves..</p>


      <h3><strong>Easy to use</strong></h3>
      <p>Deploy products and increase the security of your environment in hours, not weeks or months.</p>

      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Security-Event-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Security Even Manager</h3>
          <p>Real-time security intelligence and compliance automation.</p>
          <ul>
            <li>Delivers automated security monitoring, alerting, and response to stop threats in their tracks</li>
            <li>Streamlines compliance through log collection, secure archiving, and out-of-the-box reporting </li>
          </ul>
          <p><a href="http://www.solarwinds.com/siem-security-information-event-management-software" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Patch-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Patch Manager</h3>
          <p>Centralized patch management for Windows® desktops, laptops, and servers.</p>
          <ul>
            <li>Deploys 3rd-party patches from Adobe®, Oracle® (Java®), Mozilla®, and more</li>
            <li>Offers patch status views and patch compliance reports from an intuitive dashboard</li>
          </ul>
          <p><a href="http://www.solarwinds.com/patch-manager" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Network-Configuration-Manager.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Network Configuration Manager</h3>
          <p>Centralized network device change and configuration management software.</p>
          <ul>
            <li>Audits router and switch configurations for policy compliance to PCI DSS, DISA STIG, and other standards</li>
            <li>Standardizes network configurations using mandatory security controls</li>
          </ul>
          <p><a href="http://www.solarwinds.com/network-configuration-manager" class="blue" target="_blank">learn More</a></p>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/User-Device-Tracker-1.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">User Device Tracker</h3>
          <p>Track user logons to physical and wireless network connections.</p>
          <ul>
            <li>Enhance network security by quickly finding missing and rogue devices</li>
            <li>Receive alerts when an end-user or device connects to the network</li>
            <li>Identify where a computer has been connected to the network and where it currently is located</li>
          </ul>
          <p><a href="http://www.solarwinds.com/user-device-tracker" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Secure-Managed-File-Transfer.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Secure Managed File Transfer</h3>
          <p>Secure file transfer and file sharing.</p>
          <ul>
            <li>Deploy in your own data center to support FTP, FTPS, SFTP, and HTTP/S protocols for file transfer</li>
            <li>Provide granular access control, session monitoring, and alerts to protect sensitive data</li>
          </ul>
          <p><a href="http://www.solarwinds.com/serv-u-managed-file-transfer-server" class="blue" target="_blank">learn More</a></p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/solarwinds/Secure-FTP-Server.jpg')}}" class="img-responsive responsive-img">
          <h3 style="color: #428bca;">Secure FTP Server</h3>
          <p>FTP server software for secure file transfer.</p>
          <ul>
            <li>Secure FTP server that supports FTP and FTPS (over SSL/TLS) for file transfer</li>
            <li>View, upload, and download files from anywhere</li>
            <li>Transfer files over Web and mobile device interfaces</li>
          </ul>
          <p><a href="http://www.solarwinds.com/ftp-server-software" class="blue" target="_blank">learn More</a></p>
      </div>
    </div>

    <br><br>
    

  <!-- </div> -->
</div>

@endsection