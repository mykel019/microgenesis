@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 60px;" >
  <div class="row">
    <!-- <h2 class="margin"></h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/kaseya.png')}}" class="img-responsive" style="margin: 0 auto;">
        </div>
    </div><br>

    <div class="row">
      <div class="container">
        
        <div class="col-md-12">
          <h2><strong>Kaseya® VSA™</strong></h2>
          <h3>IT Systems Management and Remote Monitoring.</h3>
        </div>

      </div>

    </div><hr><br>

    <div class="row">

      <p>Free Trial: <a href="http://www.kaseya.com/forms/vsa-trial" class="blue">Download</a></p>

      <h3><strong>Manage All of IT from a Single Integrated Console</strong></h3>
      <p>Deliver higher service quality and achieve greater IT efficiency with Kaseya VSA, offering remote monitoring and management for all IT functions integrated in a single console.</p>

      <div class="col-md-4">
        <ul>
          <li>Discovery and Audit</li>
          <li>Inventory</li>
          <li>Automation</li>
          <li>Monitoring</li>
          <li>Security</li>
          <li>Remote Management</li>

        </ul>
      </div>

      <div class="col-md-4">
         <ul>
          <li>Mobility Management</li>
          <li>Patch Management</li>
          <li>Backup and Recovery</li>
          <li>Policy Management</li>
          <li>Service Desk</li>
          <li>Analytics and Reporting</li>
        </ul>
      </div>

    </div><br>

    <div class="row">
      <h2><strong>Manage and Secure Widely Distributed Environments</strong></h2>
      <hr>
      <p>Extend your reach, maximize efficiency and improve service levels using remote monitoring and management to discover and connect to any device from any location using only a web browser. Securely access and remotely control computers at near instantaneous connect times with extraordinary reliability, even over high latency networks.</p>
      <ul>
        <li>Manage Clients, Servers, Networks & Mobile Devices</li>
        <li>Fastest, Most Reliable Remote Control</li>
        <li>Secure Access and Communication</li>
      </ul>

      <p>View Demo: <a href="http://www.kaseya.com/forms/vsa-trial" class="blue">Demo</a></p>

      <h3>Features:</h3>

      <p>Kaseya VSA is an integrated IT systems management platform that can be leveraged seamlessly across IT disciplines to streamline and automate your IT services. Kaseya VSA integrates key management capabilities into a single platform. Kaseya VSA makes your IT staff more productive, your services more reliable, your systems more secure, and your value easier to show. VSA capabilities include:</p>

      <div class="col-md-4 text-center">
        <img src="{{asset('images/kaseya/Patch-Management.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" width="150px" height="150px">
        <h3><strong>Patch Management</strong></h3>
        <p>Kaseya Patch Management Software automatically keeps servers, workstations and remote computers up-to-date with the latest important security patches and software updates.</p>
      </div>

       <div class="col-md-4 text-center">
         <img src="{{asset('images/kaseya/Remote-Control.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" width="150px" height="150px">
        <h3><strong>Remote Control</strong></h3>
        <p>Access and manage computers from anywhere at near instantaneous connect times with extraordinary reliability, even over high latency networks.</p>
      </div>

       <div class="col-md-4 text-center">
         <img src="{{asset('images/kaseya/Audit-Inventory.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" width="150px" height="150px">
        <h3><strong>Audit & Inventory</strong></h3>
        <p>With Audit and Inventory, discovering and tracking every system and software detail becomes simple, efficient, and reliable no matter where the machines you need to manage are located.</p>
      </div>

    </div>


    <div class="row">
       <div class="col-md-4 text-center">
        <img src="{{asset('images/kaseya/Network-Performance-Monitoring.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" width="150px" height="150px">
        <h3><strong>Network Performance Monitoring</strong></h3>
        <p>Centralized control and visibility of critical system and application backup, with automated remote disk backup, disk imaging, offsite replication, file level remote backup and bare metal restore for Windows servers and workstations..</p>
      </div>

       <div class="col-md-4 text-center">
        <img src="{{asset('images/kaseya/Remote-Monitoring.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" height="150px" width="150px">
        <h3><strong>Remote Monitoring</strong></h3>
        <p>Proactive monitoring of servers, workstations, remote computers, networks, Windows event logs and applications, with in-depth analytics and role-based reporting..</p>
      </div>

       <div class="col-md-4 text-center">
        <img src="{{asset('images/kaseya/Anti-Virus.png')}}" class="img-responsive responsive-img" style="margin: 0 auto;" width="150px" height="150px">
        <h3><strong>Anti Virus</strong></h3>
        <p>Administrators can configure and deploy Kaseya Network Antivirus across the network while providing real-time status updates and alerts to ensure maximum security..</p>
      </div>

    </div>
    <br>

    <div class="row">
      <p>Download Product Brief: <a href="http://www.kaseya.com/resources/best-practices/kaseya-vsa-professional" class="blue">Download</a></p>

      <br><br>

      <h1><strong>Kaseya® AuthAnvil™</strong></h1>
      <h2><strong>Single Sign On and Multi-Factor Authentication Solutions</strong></h2>
      <hr>
      <h3><strong>Protect Company Data with Secure Access to Business Apps</strong></h3>
      <img src="{{asset('images/kaseya/business-apps.png')}}" class="img-responsive" style="width: 500px; height: 350px;">

      <p>Password-related breaches are the leading cause of data loss. Protect your company data by ensuring that only authorized people are given secure access to sensitive applications and information, using Kaseya’s complete and integrated Identity and Access Management (IAM) solution.</p>

      <div class="col-md-4">
        <ul>
          <li>Multi-Factor Authentication (MFA)</li>
          <li>Single Sign-On (SSO)</li>
          <li>Secure Remote Access</li>
          <li>Password Auditing</li>
        </ul>
      </div>

      <div class="col-md-4">
        <li>Password Automation</li>
        <li>Identity-as-a-Service (IDaaS)</li>
        <li>Credential Management</li>
        <li>Flexible Deployment</li>
      </div>
      
    </div>

    <br><br><br>


    <div class="row">
      <h2><strong>Remove Password Headaches for End Users and IT Admins</strong></h2>
      <hr>
      <img src="{{asset('images/kaseya/remove-password-headaches.jpg')}}" class="img-responsive" style="width: 500px; height: 350px;">
      <p>Remembering passwords for so many different applications is impossible. Users often reuse the same weak passwords, and take too much of IT’s time resetting them when forgotten. Onboarding and removing users is also a very time consuming task. Kaseya AuthAnvil makes provisioning and deprovisioning users a snap, giving IT more time back in their day.</p>

      <ul>
        <li>Empower users with secure access to apps</li>
        <li>Onboard and remove users quickly</li>
        <li>Free up IT’s time to focus on more valuable tasks</li>
      </ul>

      <h2><strong>Meet Compliance Requirements</strong></h2>
      <hr>
      <p>Make meeting audit and compliance requirements a breeze. Track all activity, know the health of your passwords and be informed when they are at risk of non-compliance.</p>
      <p>Use powerful reporting analytics to monitor permissions, make sure they fit your security plan, and monitor for changes to ensure settings meet policy requirements.</p>

      <br>

      <h1><strong>Kaseya® EMM™</strong></h1>
      <p><strong>Enterprise Mobile Device Management</strong></p>

      <h2><strong>Simplify Mobility Management with an Integrated Solution</strong></h2>
      <hr>
      <img src="{{asset('images/kaseya/simplify-mobility.png')}}" class="img-responsive" style="width: 500px; height: 350px;">

      <p>Kaseya Enterprise Mobility Management (EMM) enables organizations to secure mobile devices and data on the devices, whether company-owned or employee-owned. Priced attractively on a per user basis, the solution provides:</p>

      <div class="col-md-4">
        <ul>
          <li>Secure Bring Your Own Device (BYOD) Management</li>
          <li>Comprehensive Device Management</li>
          <li>Centralized Security and App Policies</li>
          <li>Streamlined User Interface</li>

        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li>Wizard-based Rapid Deployment</li>
          <li>Multi-tenant Customer Dashboard</li>
          <li>Native Integration with Kaseya VSA for Management of All Device Types</li>

        </ul>
      </div>

    </div>

    <br><br>

    <div class="row">
      <h2><strong>Enforce Comprehensive Security from a Single Screen</strong></h2>
      <hr>
      <img src="{{asset('images/kaseya/Comprehensive-Security.jpg')}}" class="img-responsive" style="height: 300px;">

      <p>Solve your BYOD, MDM (Mobile Device Management) and MAM (Mobile Application Management) challenges from a single pane of glass. Kaseya EMM provides you with comprehensive control of devices, users, apps, and data on the devices via:</p>

      <ul>
        <li>Policies for Consistent Device and App Compliance Settings</li>
        <li>Containerized Apps that Isolate Company and Personal Data</li>
        <li>Active Directory Integration for User Authentication</li>
      </ul>

      <h2><strong>Manage Mobile Devices Efficiently at the Right Price Point</strong></h2>
      <hr>
      <p>With user-based pricing, quick time-to-value, and management efficiency, organizations can manage and secure mobility for the lowest total cost of ownership.</p>
      <p>Make onboarding and management of users and devices a snap with a simplified, intuitive UI and a multi-tenant dashboard to manage customer accounts.</p>

    </div>
    

  </div>
</div>

@endsection