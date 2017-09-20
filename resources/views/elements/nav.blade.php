
        <nav class="navbar navbar-default navbar-fixed-top hidden-xs" id="nav">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/Logo_Stroke 0.5.png')}}" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}" class="menu">HOME</a></li>


                <li class="menu sub-menu-parent">
                  <a >PRODUCT & SERVICES <span class="caret"></span></a>
                    <ul class="sub-menu">

                        <li class="sub-sub-menu-parent"><a href="{{url('datacenter')}}">Data Center & Cloud <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">

                            <li><a href="{{url('dc-servers')}}">Server</a></li>
                            <li><a href="{{url('dc-storage')}}">Storage</a></li>
                            <li><a href="{{url('dc-virtualization')}}">Virtualization</a></li>
                          </ul>
                        </li>

                        <li class="sub-sub-menu-parent"><a href="{{url('informationsecurity')}}">IT Security <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('sophos')}}">Sophos</a></li>
                            <li><a href="{{url('paloalto')}}">Palo Alto Networks</a></li>
                            <li><a href="{{url('solarwinds')}}">Solarwinds</a></li>
                            <li><a href="{{url('kaseya')}}">Kaseya</a></li>
                          </ul>
                        </li>

                        <li class="sub-sub-menu-parent"><a href="{{url('network')}}">Network & Communication</a>
                      <!--     <ul class="sub-sub-menu">
                            <li><a href="">Cisco</a></li>
                            <li><a href="">Huawei</a></li>
                            <li><a href="">HP</a></li>
                          </ul> -->
                        </li>


                        <li class="sub-sub-menu-parent"><a href="{{url('pcvolume')}}">PC Volume Business <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('hp')}}">HP</a></li>
                            <li><a href="{{url('lenovo')}}">Lenovo</a></li>
                            <li><a href="{{url('dell')}}">Dell</a></li>
                            <li><a href="{{url('acer')}}">Acer</a></li>
                            <li><a href="{{url('asus')}}">Asus</a></li>
                          </ul>
                        </li>


                        <li class="sub-sub-menu-parent"><a href="{{url('pcrental')}}">Rental Business </a>
                       <!--    <ul class="sub-sub-menu">
                            <li><a href="">Laptops</a></li>
                            <li><a href="">Desktops</a></li>
                            <li><a href="">Projectors</a></li>
                            <li><a href="">Training Venue</a></li>
                          </ul> -->
                        </li>


                        <li class="menu sub-sub-menu-parent"><a href="{{url('licensing')}}">Software Licensing & Subscription<i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('microsoft')}}">Microsoft</a></li>
                            <li><a href="{{url('autodesk')}}">Autodesk</a></li>
                            <li><a href="{{url('adobe')}}">Adobe</a></li>

                          </ul>
                        </li>

                        <li class="menu"><a href="{{url('infrastructure')}}">Data Center Infrastructure</a>
                  
                        </li>

                        <li class="menu sub-sub-menu-parent"><a href="{{url('documentmanagement')}}">Document Management Solutions </a>
                         <!--  <ul class="sub-sub-menu">
                            <li><a href="">FujiXerox Docushare</a></li>
                          </ul> -->
                        </li>

                        <li class="menu sub-sub-menu-parent"><a href="{{url('services')}}">Professional Services <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('ms-proffservices')}}">Microsoft Services</a></li>
                            <li><a href="{{url('smartserve')}}">SmartServe</a></li>
                          </ul>
                        </li>


                        <li class="menu sub-sub-menu-parent"><a href="{{url('education')}}">Trainings & Education <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('redhat')}}">Red Hat</a></li>
                            <li><a href="{{url('pearsonvue')}}">Pearson Vue</a></li>
                          </ul>
                        </li>

                        <li><a href="{{url('mobile')}}">Managed Services</a></li>
                        <li><a href="{{url('cloud')}}">Cloud Solutions</a></li>

                        <li class="menu sub-sub-menu-parent"><a href="{{url('products')}}">Emerging Products <i class="fa fa-angle-right pull-right"></i></a>
                          <ul class="sub-sub-menu">
                            <li><a href="{{url('varonis')}}">Varonis</a></li>
                            <li><a href="{{url('tenable')}}">Teenable</a></li>
                            <li><a href="{{url('gigamon')}}">Gigamon</a></li>
                            <li><a href="">ForeScout</a></li>
                          </ul>
                        </li>
                    </ul>
                </li>

                <!-- <li><a href="{{url('home/about')}}" class="menu ">ABOUT</a></li> -->

                <li class="menu sub-menu-parent">
                  <a> ABOUT<span class="caret"></span></a>
                  <ul class="sub-menu">
                    <li><a href="{{url('home/about')}}">Profile</a></li>
                    <!-- <li><a href="">News and Updates</a></li> -->
                    <li><a href="{{url('awards2')}}">Awards</a></li>
                    <li><a href="{{url('certificate')}}">Accreditations & Certifications</a></li>

                  </ul>
                </li>

                <!-- <li><a href="#partners" class="menu">PARTNERS</a></li> -->
                <li><a href="{{url('home/contact')}}" class="menu">CONTACT</a></li>


        <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu searchbox">
                    <li>
                      <form class="navbar-form" role="search">
                        <div class="input-group">
                          <input type="text" class="form-control" name="q" placeholder="Search" id="searching">
                          <div class="input-group-btn">
                            <button class="btn btn-default searching"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </li>
                  </ul>
                </li> -->

           <!--      <li class="dropdown">
                  <a class="dropdown-toggle menu" data-toggle="dropdown" href="#">SEARCH
                  <span class="glyphicon glyphicon-search"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="#">Extras</a></li>
                    <li><a href="#">Media</a></li> 
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>

