@extends('app')

@section('content')

 <!--      <br><br><br>
      <div class="row">
        <h2></h2>
        <div class="col-md-2 col-md-offset-2">
          <img src="{{asset('images/quality.png')}}" class="img-responsive responsive-img" style="width: 100;height: 100px; color: gray;
          ">
          <h3 class="text-center">QUALITY</h3>
        </div>

         <div class="col-md-2 col-md-offset-1">
          <img src="{{asset('images/services.png')}}" class="img-responsive responsive-img" style="width: 100;height: 100px; color: gray;
          ">
          <h3 class="text-center">SERVICES</h3>
        </div>

         <div class="col-md-2 col-md-offset-1">
          <img src="{{asset('images/proficiency.png')}}" class="img-responsive responsive-img" style="width: 100;height: 100px; color: gray;
          ">
          <h3 class="text-center">PROFICIENCY</h3>
        </div>
      </div>
      <br><br><br> -->
      <!-- <div class="clearfix"></div> -->

@include('elements/bootstrapcarousel')

<div class="divider"></div>

<div style="background-color: #EEEEEE;">
      <!-- SERVICES -->
        <div id="product" class="container-fluid text-center img-responsive" >
            <div class="container">
              
              <h2 class="margin" style="font-weight: 600; margin-bottom: 70px!important;">PRODUCT & SERVICES</h2>
            <!-- <div class="row"><div class="container"><hr style="box-shadow: grey; margin-bottom: 55px;"></div></div> -->
            <!-- <div class="border-line"></div> -->


              <!-- <div class="row"> -->

                      <!-- DATA CENTER SOLUTIONS -->
                        <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('datacenter')}}" target="_blank">
                          <i class="custom-icon" aria-hidden="true" value="three" ><img src="{{asset('images/ps-icons/Data Center Solutions.png')}}"><span class="fix-editor">&nbsp;</span></i>
                               <h6 class="blue"><strong>DATA CENTER & CLOUD</strong></h6>
                              <p class="prod-info text-center" id="three">DC Virtualization | Hyper Converged Infrastructure | Servers | Storage | Hybrid Cloud | Disaster Recovery | Data Protection</p>
                          </a>
                        </div>
                      <!-- END OF DATA CENTER SOLUTIONS -->



                      <!-- IT SECURITY -->
                        <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('informationsecurity')}}" target="_blank">
                            <!-- <i class="fa fa-lock custom-icon" aria-hidden="true" style="width: 115px"><span class="fix-editor">&nbsp;</span></i> -->
                          <i class="custom-icon" aria-hidden="true" value="two"><img src="{{asset('images/ps-icons/Information Security.png')}}"><span class="fix-editor">&nbsp;</span></i>
                               <h6 class="blue"><strong>IT SECURITY</strong></h6>
                              <p class="prod-info text-center" id="two" style="font-size: 13px;">Next Gen Endpoint Security,Data Encryption,Data Leak Protection,Web and Email Security,Mobile Security,Next Gen Firewalls & UTM, IPS, SIEM, Application Security, Source Code Security, Vulnerability Assessment, Penetration Testing, System Management</p>
                          </a>
                        </div>
                      <!-- END OF IT SECURITY -->



                      <!-- NETWORK & COMMUNICATION -->
                          <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                            <a href="{{url('network')}}" target="_blank">
                            <i class="custom-icon" aria-hidden="true" data-id="1" value="one"><img src="{{asset('images/ps-icons/Network & Communications.png')}}"><span class="fix-editor">&nbsp;</span></i>

                                <h6 class="blue"><strong>NETWORK & COMMUNICATION</strong></h6>
                                <p class="prod-info" id="one">Switches, Routers | Wireless Infrastructure | Application | Delivery Controller | SD-WAN | Network Visibility, Monitoring & Management | Unified Communication</p>
                            </a>
                          </div>
                      <!-- END OF NETWORK AND COMMUNICATON -->

              


                        <!-- DATA CENTER INFRASTRACTURE -->
                          <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                            <a href="{{url('infrastructure')}}" target="_blank">
                              <!-- <i class="fa fa-building custom-icon" aria-hidden="true" style="width: 115px"><span class="fix-editor">&nbsp;</span></i> -->
                            <i class="custom-icon" aria-hidden="true" value="four"><img src="{{asset('images/ps-icons/Data Infrastructure.png')}}"><span class="fix-editor">&nbsp;</span></i>
                                 <h6 class="blue"><strong>DATA CENTER INFRASTRUCTURE</strong></h6>
                                <p class="prod-info" id="four">Structured Cabling | Data Racks | UPS | Cooling System | Fire Suppression System | Access Control | CCTV & Surveillance System | Generators | Civil Works | Design and Installation</p>
                            </a>
                          </div>
                        <!-- END OF DATA CENTER INFRASTRUCTURE -->




                      <!-- TRAININGS AND EDUCATION -->
                          <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('education')}}" target="_blank">
                            <!-- <i class="fa fa-graduation-cap custom-icon" aria-hidden="true"><span class="fix-editor">&nbsp;</span></i> -->
                            <i class="custom-icon" aria-hidden="true" value="five" ><img src="{{asset('images/ps-icons/Training and Education.png')}}"><span class="fix-editor">&nbsp;</span></i>
                              <h6 class="blue"><strong>TRAININGS & EDUCATION</strong></h6>

                              <p class="prod-info text-center" id="five">Red Hat Certified Training Partner | Pearson Vue Exam Center | Centiport Exam Center</p>
                          </a>
                          </div>
                       <!-- END OF TRAININGS AND EDUCATION -->



                      <!-- PC VOLUME BUSINESS -->
                         <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('pcvolume')}}" target="_blank">
                            <!-- <i class="fa fa-laptop custom-icon" aria-hidden="true"><span class="fix-editor">&nbsp;</span></i> -->
                            <i class="custom-icon" aria-hidden="true" value="six" ><img src="{{asset('images/ps-icons/PC Volume Business.png')}}"><span class="fix-editor">&nbsp;</span></i>
                               <h6 class="blue"><strong>PC VOLUME BUSINESS</strong></h6>
                              <p class="prod-info text-center" id="six">Desktops and Laptops | Printers and Monitors | PC Peripherals | IT Consumables (Ink, Toner, Paper) | PC Components and Spare Parts</p>
                          </a>
                          </div>
                      <!-- END OF PC VOLUME BUSINESS -->


                      <!-- PC RENTAL BUSINESS -->
                          <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('pcrental')}}" target="_blank">
                            <i class="custom-icon" aria-hidden="true" value="seven" ><img src="{{asset('images/ps-icons/PC Rental Business.png')}}"><span class="fix-editor">&nbsp;</span></i>
                            
                               <h6 class="blue"><strong>RENTAL BUSINESS</strong></h6>
                              <p class="prod-info text-center" id="seven">Desktops | Laptops | Projectors | Servers | Facilities</p>
                              </a>
                          </div>
                      <!-- END OF PC RENTAL BUSINESS -->



                        <!-- PROFESSIONAL SERVICES -->
                        <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                        <a href="{{url('services')}}" target="_blank">
                          <!-- <i class="fa fa-briefcase custom-icon" aria-hidden="true"><span class="fix-editor">&nbsp;</span></i> -->
                          <i class="custom-icon" aria-hidden="true" value="eight"><img src="{{asset('images/ps-icons/Professional Services.png')}}" style="padding-right: 3px;"><span class="fix-editor">&nbsp;</span></i>
                          
                             <h6 class="blue"><strong>PROFESSIONAL SERVICES</strong></h6>         
                            <p class="prod-info" id="eight">System Design & Implementation | Project Management | Network Assessment, Design & Migration | Penetration Testing | 24/7 After Sales Support | Microsoft System Integration Services</p>
                          </a>
                        </div>

                        <!-- END OF PROFESSIONAL SERVICES -->



                        <!-- START OF DOCUMENT MANAGEMENT SOLUTIONS -->

                        <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('documentmanagement')}}" target="_blank">
                            <!-- <i class="fa fa-file-text-o custom-icon" aria-hidden="true" style="width: 115px"><span class="fix-editor">&nbsp;</span></i> -->
                            <i class="custom-icon" aria-hidden="true" value="nine"><img src="{{asset('images/ps-icons/Document Imaging Solutions.png')}}"><span class="fix-editor">&nbsp;</span></i>
                            
                               <h6 class="blue"><strong>DOCUMENT MANAGEMENT SOLUTIONS</strong></h6>         
                              <p class="prod-info" id="nine">Document Digitization | Workflow Automation | High Speed Scanners | Scanning Services | Kofax | Docushare | Microsoft Sharepoint</p>
                            </a>
                          </div>

                          <!-- END OF DOCUMENT MANAGEMENT SOLUTIONS -->
             


                      <!-- START OF SOFTWARE LICENSING -->
                        <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                          <a href="{{url('licensing')}}" target="_blank">
                            <i class="custom-icon" aria-hidden="true" value="ten"><img src="{{asset('images/ps-icons/software-license.png')}}"><span class="fix-editor">&nbsp;</span></i>
                               <h6 class="blue"><strong>SOFTWARE LICENSING & SUBSCRIPTION</strong></h6>         
                              <p class="prod-info" id="ten">Microsoft | Autodesk | Adobe</p>
                            </a>
                          </div>
                      <!-- END OF SOFTWARE LICENSING -->


                          <!-- START OF CLOUD SOLUTIONS -->
                           <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                              <a href="{{url('cloud')}}" target="_blank">
                                <i class="custom-icon" aria-hidden="true" value="eleven"><img src="{{asset('images/ps-icons/cloud.png')}}"><span class="fix-editor">&nbsp;</span></i>
                                
                                   <h6 class="blue"><strong>CLOUD SOLUTIONS</strong></h6>         
                                  <p class="prod-info" id="eleven">Cloud Infrastructure | Cloud-based Backup and Disaster Recovery | Cloud Productivity</p>
                                </a>
                          </div>
                          <!-- END OF CLOUD SOLUTION -->


                          <!-- START OF MOBILE SOLUTIONS -->
                          <div class="col-md-4 col-sm-6 col-xs-12 icon-wrapper">
                            <a href="{{url('mobile')}}" target="_blank">
                              <i class="custom-icon" aria-hidden="true" value="twelve"><img src="{{asset('images/ps-icons/managed-services.png')}}"><span class="fix-editor">&nbsp;</span></i>
                              
                                 <h6 class="blue"><strong>MANAGED SERVICES</strong></h6>         
                                <p class="prod-info" id="twelve">Network | Security | Desktops and Endpoints | HelpDesk</p>
                            </a>
                          </div> 
                          <!-- END OF MOBILE SOLUTIONS -->
              <!-- <br><br> -->

            </div>
        </div>

          <!--  MAKING IT EASY FOR YOU -->

          <div class="" id="design-bg" style="background: url('/images/hd4.jpg') no-repeat fixed center;background-size: cover;  color: #ffffff;position: relative;overflow: hidden;height: 450px; width: 100%; display: table;">
            <div class="overlay"></div>
            <div class="row text-center" style="z-index: 1; position: relative; vertical-align: middle!important;display: table-cell;"> 
              <h1 id="making" style="font-size: 40px; letter-spacing: 3px;"><strong>MAKING <span class="blue" style="font-size: 70px;">IT</span> EASY FOR YOU!</strong></h1>
              <h4>One of the leading IT Solutions Provider in the Philippines</h4>
            </div>
          </div>

          
        <div id="partners" style="padding-top: 20px;padding-bottom: 20px;">
          <h2 class="margin text-center" style="font-weight: 600">OUR PARTNERS</h2>

          <div class="border-line" style="width: 1200px; margin: 0 auto;" ></div>
          <section id="features" class="blue">
                <div class="content">
                
                  <div class="slider responsive">
                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/AUTODESK.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/KASEYA.png')}}" class="partners-img"></h3>
                    </div>
              
                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/MICROSOFT  GOLD PARTNER.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/KOFAX VAD.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/APC.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/LENOVO.png')}}" class="partners-img"></h3>
                    </div>


                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/SOPHOS.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/TENABLE.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/CISCO.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/PANDUIT.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/DELL EMC2.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/RED HAT CTP.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/CHECKMARX.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/VERTIV.png')}}" class="partners-img"></h3>

                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/HUAWEI VAP.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/F5.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/WATCHGUARD EP.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/PALO ALTO.png')}}" class="partners-img"></h3>
                    </div>

                    <div class="img-box">
                      <h3><img src="{{asset('images/partners-logo/SIEMON.png')}}" class="partners-img"></h3><br>
                      <h3><img src="{{asset('images/partners-logo/HP.png')}}" class="partners-img"></h3><br>

                    </div>

                  </div>
                </div>
              </section>
        </div>
</div>
  
@endsection

