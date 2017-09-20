@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/product-logo/Microsoft-Services.png')}}" class="img-responsive responsive-img">
        <br><br>

        <h2 class="blue text-center"><strong>Windows Server.</strong></h2>
        <br>
        <p>brings our experience delivering global-scale cloud services into your infrastructure with features and enhancements in virtualization, management, storage, networking, virtual desktop infrastructure, access and information protection, and the web and application platform.</p>

        <br>

        <h2 class="text-center">Implementation and Deployment</h2>
        <div class="border-line"></div>
       
      </div>
    </div>


    <div class="row">
      <h2 class="text-center blue"><strong>Core Infrastructure</strong></h2>
      <div class="col-md-4">
       <img src="{{asset('images/microsoft/ms-services/activedirectory.png')}}" class="img-responsive responsive-img">
       <p>By using the Active Directory® Domain Services (AD DS) server role, you can create a scalable, secure, and manageable infrastructure for user and resource management, and you can provide support for directory-enabled applications, such as Microsoft® Exchange Server.</p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/ms-services/hyperV2.png')}}" class="img-responsive responsive-img">
        <p>The Hyper-V server role in Windows Server lets you create a virtualized server computing environment where you can create and manage virtual machines. You can run multiple operating systems on one physical computer and isolate the operating systems from each other. With this technology, you can improve the efficiency of your computing resources and free up your hardware resources.
        </p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/ms-services/system_center_2012_logo-1.png')}}" class="img-responsive responsive-img">
        <p>System Center helps customers gain an unified datacenter management experience with out-of-the-box monitoring, provisioning, configuration, automation, protection and self-service capabilities. You can now extend System Center capabilities with Microsoft Operations Management Suite (OMS) to deliver a cloud-inspired, platform-agnostic solution to help you manage both traditional infrastructure and modern applications with ease.
        </p>
      </div>
    </div>

    <br>
    <div class="border-line"></div>

    <div class="row">
      <h2 class="text-center blue"><strong>Business Productivity Infrastructure Services</strong></h2>
      <div class="col-md-12">
       <img src="{{asset('images/microsoft/ms-services/Office-365.png')}}" class="img-responsive responsive-img" align="left" style="width: 400;height: 200px;">
       <p class="indent">Office 365. "Office 365" refers to subscription plans that include access to Office applications plus other productivity services that are enabled over the Internet (cloud services), such as Skype for Business web conferencing and Exchange Online hosted email for business, and additional online storage with OneDrive for Business and Skype minutes for home.</p>
      </div>

      <div class="col-md-12">
        <img src="{{asset('images/microsoft/ms-services/exchange2013header.png')}}" class="img-responsive responsive-img" align="left" style="width: 350px;height: 200px;">
        <p class="indent">Exchange Server lets you accomplish more with rich Outlook experiences on phones, tablets, desktop, and the Web. Integration with Outlook, SharePoint, and OneDrive for Business helps you experience collaboration better when receiving, editing, and sharing documents without ever having to leave Outlook. 
        </p>
      </div>

      <div class="col-md-12">
        <img src="{{asset('images/microsoft/ms-services/Skype-for-Business-logo-FI.png')}}" class="img-responsive responsive-img" align="left" style="width: 350px;height: 200px;">
        <p class="indent">If you already use Skype to stay in touch with friends and family in your life away from work, you'll appreciate the power and simplicity of Skype for Business where it's easy to find and connect with co-workers. And you can use the devices you already have to reach businesses through an enterprise-grade, secure, IT-managed platform. If you're coming to Skype for Business from Lync, you'll recognize all of the features you already use but in a fresh new interface with simplified controls and some great new additions.
        </p>
      </div>

      <div class="col-md-12">
        <img src="{{asset('images/microsoft/ms-services/sharepoint-2013-logo-large.png')}}" class="img-responsive responsive-img" align="left" style="width: 350px;height: 200px;">
        <p class="indent">Making decisions faster and staying in contact are critical for making any organization more effective. Your ability to access information on the go is now a workplace necessity. SharePoint Server makes file storage and document collaboration more people-centric, with touch-based experiences across devices and improved mobile access to content, people, and applications.
        SharePoint Server  improves user experiences and capabilities based on innovations in Office 365, available either as part of your on-premises deployment or through a hybrid implementation of SharePoint Server  and Office 365.
        </p>
      </div>
    </div>

    <div class="border-line"></div>

    <div class="row">
      <h2 class="text-center blue"><strong>Microsoft Products Training Offerings</strong></h2>

      <ul class="list-inline">
        
     
        <li><img src="{{asset('images/microsoft/ms-services/windows-server.png')}}" class="img-responsive responsive-img" style="width: 200px;"></li>
    

      
        <li><img src="{{asset('images/microsoft/ms-services/exchange2013header.png')}}" class="img-responsive responsive-img" style="width: 200px;"></li>
        
   

      
        <li><img src="{{asset('images/microsoft/ms-services/Skype-for-Business-logo-FI.png')}}" class="img-responsive responsive-img" style="width: 200px;"></li>
        


    
        <li><img src="{{asset('images/microsoft/ms-services/sharepoint-2013-logo-large.png')}}" class="img-responsive responsive-img" style="width: 200px;"></li>
        
  

    
        <li><img src="{{asset('images/microsoft/ms-services/system_center_2012_logo-1.png')}}" class="img-responsive responsive-img" style="width: 200px;"></li>
        

      </ul>

    </div>

    <div class="border-line"></div>

    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <h2 class="text-center">Competencies</h2>
        <img src="{{asset('images/microsoft/ms-services/microsoft-certified-partner.png')}}" width="100%;">
        <img src="{{asset('images/microsoft/ms-services/Microsoft-Partner-1.png')}}" width="100%">
      </div>

      <div class="col-md-6">
        <h2>Certifications</h2>
        <h5>Trainer</h5>
        <div class="border-line"></div>
        <h5>Professional</h5>
        <div class="border-line"></div>
        <h5>IT Professional</h5>
        <ul>
          <li>Office 365 Administrator</li>
          <li>Virtualization Administrator on Windows Server 2008 R8</li>
        </ul>
        <div class="border-line"></div>
        <h5>Solutions Associate</h5>
        <ul>
          <li>Windows Server 2010</li>
          <li>Office 365</li>
        </ul>
        <div class="border-line"></div>
        <h5>Solutions Expert</h5>
        <ul>
          <li>Communication</li>
        </ul>
        <div class="border-line"></div>
        <h5>Technology Specialist</h5>
        <ul>
          <li>Windows Server 2008 R2 Server Virtualization</li>
          <li>Microsft Lync Server 2010 Configuration</li>
        </ul>
      </div>
    </div>

</div>

@endsection