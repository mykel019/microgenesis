@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container bg-3 text-center" style="padding: 30px;">
  <div class="row">
    <!-- <h2 class="margin">KOFAX</h2> -->
    <br>
      <img src="{{asset('images/kofax/kofax_logo.png')}}" class="img-responsive responsive-img margin" width="400px">
    <div class="border-line"></div>

    <div class="row">
      <div class="col-md-12">
      <br>
        <h2 class="blue"><strong>8 in 1 Kofax Bundle</strong></h2><br>
        <img src="{{asset('images/kofax/banner final.jpg')}}" class="responsive-img img-responsive">

        <br><br>  

        <p class=""><b>Our 8-in-1 KOFAX BUNDLE is a simple, affordable, yet complete document management solution that aims to digitize, enhance, archive, and manage your organization’s documents. It comes with various features and components to achieve a comprehensive and reliable end-to-end entry-level document management solution.</b></p>

        <!-- <a href="" class="btn btn-info btn-lg">Inqurie now / Request for more demo</a> -->
          
        </div>
    </div>

    <br>

    <div class="row">
      <h4 class="blue"><strong>Main features:</strong></h4>
      <div class="col-md-4 col-xs-12">
      <img src="{{asset('images/kofax/2.jpg')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
      <h4 class="blue"><strong>Document digitization with text enhancement</strong></h4>
      <p>Our offering comes with both hardware(PC + scanner) and software (Kofax) components for the scanning of your organization's documents. In (OCR) that identify character on your documents for easy sorting and retrieval. It is also has text enhancement capability to sharpen the text and increase accuracy of the scanned file.</p>
      </div>

      <div class="col-md-4 col-xs-12">
      <img src="{{asset('images/kofax/1.jpg')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
      <h4 class="blue"><strong>filing, archiving and retrieval of digital documents</strong></h4>
      <p>Once your document have been digitize, Nuxeo the document management software will allow for proper filing, archiving and retrieval of the digital files. Nuxeo provides an open source content management system platform, which offers different types of information management solution such as Document Mangement, Digital Assset Management, and Case Management.</p>
      </div>

      <div class="col-md-4 col-xs-12">
        <img src="{{asset('images//kofax/3.jpg')}}" class="img-responsive responsive-img" style="width: 150px; height: 150px;">
       	<h4 class="blue"><strong>BIR RR no. 5-2014 Compliance</strong></h4>
        <p>The BIR gives incentives to organization that utilize document digitization systems. Our offering is Electronic Storage System compliant with BIR RR No. 5-2014, allowing taxpayer to retain only an electronic copy of the books account subsidiary books and other accounting records.</p>
      </div>

    </div>

    <br>

    <div class="row">
      <div class="col-md-3">
        <img src="{{asset('images/kofax/5.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
        <h4 class="blue text-center"><strong>Uninterruptible Power Supply</strong></h4>
        <p>We also included a Uninterruptible Power Supply (UPS) component to help mitigate risks and losses in the unfortunate event of power interruptions, shortages and outages. This gives the system enough power to save and back up important documents and information during the aforesaid occurences.</p>
      </div>

      <div class="col-md-3">
        <img src="{{asset('images/kofax/8.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
        <h4 class="blue text-center"><strong>back up Storage</strong></h4>
        <p>We included an external hard drive to complement the HDD of the desktop component. This allows for multiple storage and copies of digital files in case of system, crashes and similar incidents.</p>
      </div>

      <div class="col-md-3">
        <img src="{{asset('images/kofax/6.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
        <h4 class="blue text-center"><strong>Training</strong></h4>
        <p>We will train designated users of the system to maximize the utilization of our document management solutions. This is done either in our officers or on site, whenever applicable</p>
      </div>

      <div class="col-md-3">
        <img src="{{asset('images/kofax/7.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
        <h4 class="blue text-center"><strong>Security</strong></h4>
        <p>The 8 in 1 Kofax Bundle will bes secured by Microsoft Bitlocker. Having BitLocker integrated with the operating system addresses the threats of data theft or exposure from lost, stolen or inappropriately decommissioned computers.</p>
        
      </div>
    </div>

    <br>

<!--     <div class="row">
      <img src="{{asset('images/kofax/4.png')}}" class="img-responsive responsive-img" style="width:200px; height: 200px; float: left;">
      <h4 class="blue"><strong>Bonus Feature (Limited time only)</strong></h4>
      <h4><strong>Scanning services</strong></h4>
      <ul>
        <li><p>As our introductory promotion for this solution offering, we are including Free scanning services to all organizations that avail of this package</p></li>
      </ul>
    </div> -->

    <div class="row">
      <h2 class="blue text-center"><strong>COMPONENTS</strong></h2>
      <div class="col-md-6">
      <img src="{{asset('images/kofax/1.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
        <h4 class="blue"><strong>DMS (Document Management System)</strong></h4>
        <ul style="text-align: left;">
          <li>By Nuxeo</li>
          <li>Nuxeo provides an open source content management system platform, which offers different types of information management solutions such as Document Management, Difital Asset Management and Case Management.</li>
        </ul>
      </div>

      <div class="col-md-6">
      <img src="{{asset('images/kofax/9.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Scanner</strong></h4>
        <ul style="text-align: left;">
          <li>Automatic Document Feeder (ADF) 25ppm</li>
          <li>50 ipm, Simplex & Duplex scanning</li>
          <li>150 dpi-1200 dpi</li>
          <li>3,000 sheets/day Paper length</li>
          <li>A4, legal size, letter, business card, post card, a4, a5, a6, b5, b6</li>
          <li>Designed with TWAIN/ISISTM SDK</li>
        </ul>
      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
         <img src="{{asset('images/kofax/2.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Back up Storage</strong></h4>
        <ul style="text-align: left;">
          <li>Hard disk drive (HDD) - 1 Terabyte(TB)</li>
          <li>Our offering comes with a backup external hard disk drive of 1 Terabyte (TB) to augment the 500MB internal storage of the component</li>
        </ul>
      </div>

      <div class="col-md-6">
         <img src="{{asset('images/kofax/6.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Training</strong></h4>
        <ul style="text-align: left;">
          <li>User training will be conducted at the Microgenesis Business System training hall (or onsite whenever applicable). This training will cover topics from assembling the components together down to actual utilization of the system</li>
        </ul>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
         <img src="{{asset('images/kofax/4 (1).png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Desktop</strong></h4>
        <ul style="text-align: left;">
          <li>Processor Intel® Xeon® 2x Quad-Core, or equivalent</li>
          <li>System memory 16gb or more</li>
          <li>Disk space of 500 gb or more</li>
          <li>Display 1024x768 w/24 bit color</li>
          <li>17" with NIC of 1 gbps</li>
          <li>O/S of Windows Server 2008 R2 (64-bit)</li>
        </ul>
      </div>

      <div class="col-md-6">
         <img src="{{asset('images/kofax/7.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Security</strong></h4>
        <ul style="text-align: left;">
          <li>The 8in1 kofax bundle will be secured by Microsoft BitLocker. Having BitLocker integrated with the operating system addresses the threats of data theft or exposure from lost, stolen, or inappropriately decommissioned computers</li>
        </ul>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
         <img src="{{asset('images/kofax/3.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Kofax</strong></h4>
        <ul style="text-align: left;">
          <li>Kofax is a powerful all-in-one, easy-to-use, batch oriented document scan application capable of high-speed scanning with real-time image display, indexing and bar code detection</li>
          <li>It is designed for less complex applications and makes it easy for anyone to quickly scan, index and export documents for fast and easy retrieval.</li>
        </ul>
      </div>

      <div class="col-md-6">
         <img src="{{asset('images/kofax/5.png')}}" class="img-responsive responsive-img" style="width: 170px; height: 170px;">
      <h4 class="blue"><strong>Uninterruptible Power Supply</strong></h4>
        <ul style="text-align: left;">
          <li>600 VA</li>
          <li>Battery run time: 4 minutes</li>
          <li>Recharge time: 4 hours</li>
        </ul>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-md-12">
        <h2 class="blue text-center"><strong>TESTIMONIES</strong></h2>
        <img src="{{asset('images/kofax/testimony-1-1024x663.png')}}" class="img-responsive responsive-img" style="height: 400px;width: 700px;"><br>
        <img src="{{asset('images/kofax/testimony-2-1024x663.png')}}" class="img-responsive responsive-img" style="height: 400px;width: 700px;"><br>
        <img src="{{asset('images/kofax/testimony-3-1024x663.png')}}" class="img-responsive responsive-img" style="height: 400px; width: 700px;"><br>

      </div>
    </div>

  </div>
</div>
<br><br>

@endsection