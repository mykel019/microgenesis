@extends('app')

@section('css')
  <style type="text/css">
    @media screen and (max-width: 520px){
      ul {
        margin-left: 20px!important;
      }
    }

    #bg-trigger{
      background-image: url('../images/icon-bg4.jpg');
      background-size: cover;
      position: absolute;
    }
  </style>
@endsection


@section('content')

<div class="divider hidden-xs"></div>

<div class="container text-center" style="padding: 0 40px;">

<div class="well" style="background-color: #fff; margin: 30px 0">
  <div class="row">
    <h2 class="margin text-center"><strong>Accreditations and Certifications</strong></h2>
    <div class="border-line"></div>

    <div class="row">
      <h5 class="text-center">Microgenesis is the RedHat Certified Training Partner in the Philippines. We are also a Pearson VUE® Authorized Test Center.</h5>
      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/redhat.png')}}"; width="300;" height="150" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>Red Hat Certified Training Partner</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">
          <li><p>Red Hat Certified Engineers (RHCE)</p></li>
          <li><p>Red Hat Certified System Administrator (RHCSA)</p></li>
          <li><p>Red Hat Certified Instructor (RHCI)</p></li>
          <li><p>Red Hat Certified Architect (RHCA)</p></li>
        </ul>
        </div>
      <!-- </a> -->
      
      <!-- <a href=""> -->
        <div class="col-md-6 col-xs-12">
        <img src="{{asset('images/product-logo/paloalto new.png')}}" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>Palo Alto Network Gold Partner</strong></h5>
        <ul style="text-align: left; margin-left: 90px;">
          <li><p>Certified Network Security Engineer</p></li>
          <li><p>Accredited Configuration Engineer</p></li>
        </ul>
        </div>
      <!-- </a> -->
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/sophos.png')}}" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>Sophos Platinum Partner</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">


          <li><p>Sophos Trusted Sales Engineers</p></li>
          <li><p>Sophos Architect (Endpoints & Network)</p></li>
          <li><p>Sophos Certified Engineers</p></li>
          <li><p>Sophos UTM - Certified Engineers</p></li>
          <li><p>Sophos UTM - Certified Architects</p></li>
          <li><p>Sophos Email Protection - Certified Engineers</p></li>
        </ul>
        
      </div>

      <div class="col-md-6">
        <img src="{{asset('images/accreditation/watchguard.png')}}" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>Watch Guard Gold Partner</strong></h5>
        <ul style="text-align: left; margin-left: 90px;">
          <li> <p>Watch Guard Certified Engineer</p></li>
        </ul>
        
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/cisco.png')}}" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>Cisco-Select Partner</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">  
         <li><p>Cisco Certified Network Associate (CCNA)</p></li>
         <li><p>Cisco Certified Design Associates (CCDA)</p></li>
         <li><p>Cisco Certified Internetwork Expert (CCIE)</p></li>
        </ul>
      </div>

      <div class="col-md-6">
        <img src="{{asset('images/accreditation/ibm.png')}}" class="img-responsive responsive-img">
        <h5 class="blue text-center"><strong>IBM Business Partner</strong></h5>
        <ul style="text-align: left; margin-left: 90px;">
          <p>IBM Certified Specialist with Advance Training</p>
        </ul>
      </div>
    </div>
    <br>

    <div class="row">
    <div class="col-md-6">
      <img src="{{asset('images/accreditation/ms_gold_partner.png')}}" class="img-responsive responsive-img">
      <h5 class="blue text-center"><strong>Microsoft Gold Partner</strong></h5>
      <ul style="text-align: left; margin-left: 70px;">

        <li><p>Microsoft Certified Systems Engineers (MCSE)</p></li>
        <li><p>Microsoft Certified IT Professionals (MCITP)</p></li>
        <li><p>Microsoft Certified Professionals (MCP)</p></li>
      </ul>

    </div>

    <div class="col-md-6">
      <img src="{{asset('images/accreditation/hp.png')}}" class="img-responsive responsive-img">
      <h5 class="blue text-center"><strong>HP Business Partner</strong></h5>
      <ul style="text-align:left; margin-left: 90px;">
        <li><p>HP Certified Engineer</p></li>
      </ul>
    </div>
      
    </div>

    <div class="row">

      <div class="col-md-6">
      <img src="{{asset('images/accreditation/huawei.png')}}" class="img-responsive responsive-img">

        <h5 class="blue text-center"><strong>Huawei Value Added Partner</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">
          <li><p>HCNP, HCNA</p></li>
        </ul>
      </div>

      <div class="col-md-6">
      <img src="{{asset('images/accreditation/kaseya.png')}}" class="img-responsive responsive-img">
      <h5 class="blue text-center"><strong>Kaseya Certified Engineers</strong></h5>
        
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/emc2.png')}}">
        <h5 class="blue"><strong>Platinum Partner</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">
          <li>DELL KACE Certified Trainor (KCT)</li>
          <li>DELL KACE Certified Engineers</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/kofax_logo.png')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Kofax Value Added Distributor</strong></h5>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/hp/silver-partner.jpg')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>HP Enterprise Silver Partner</strong></h5>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/hp/aruba.jpg')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>HP Aruba Gold Partner</strong></h5>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/hp/hp-gold-partner.jpg')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>HP International Gold Partner</strong></h5>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/redhat/redhat.png')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Red Hat Ready Partner</strong></h5>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/solarwinds_author.png')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Solarwinds Tier 1 Partner</strong></h5>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/Pearson-Vue-Authorized-Test-Center.jpg')}}">
        <br>
        <h5 class="blue"><strong>Authorized Testing Center</strong></h5>
        <ul style="text-align: left; margin-left: 70px;">
          <li>Solarwinds Certified Engineers</li>
        </ul>
      </div>
    </div>

    <br><br>


    <div class="row">
      <div class="col-xs-6">
        <img src="{{asset('images/accreditation/certiport-certified-testing-centre.png')}}">
        <h5 class="blue"><strong>Authorized Testing Center</strong></h5>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/autodesk-silver.jpg')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Silver Partner</strong></h5>
      </div>
    </div>

    <br><br>


    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/wg-expert-partner.jpg')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Expert Partner</strong></h5>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/accreditation/lenovo-diamond.png')}}" class="img-responsive responsive-img">
        <h5 class="blue"><strong>Diamond Partner</strong></h5>
      </div>
    </div>



  </div>
</div>
</div>

@endsection