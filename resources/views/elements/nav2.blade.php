
        <nav class="navbar navbar-inverse navbar-fixed-top visible-xs" id="nav2">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#myPage"><img src="{{ asset('images/Logo_Stroke 0.5.png')}}" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar2">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}" class="menu"><i class="fa fa-home"></i> HOME</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle menu " data-toggle="dropdown"><i class="fa fa-cogs" aria-hidden="true"></i> PRODUCT& SERVICES <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a href="{{url('datacenter')}}">Data Center & Cloud</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Server</a></li>
                        <li><a href="">Storage</a></li>
                        <li><a href="">Virtualization</a></li>
                      </ul>
                    </li>

                    <li class="dropdown"><a href="{{url('informationsecurity')}}">IT Security</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Sophos</a></li>
                        <li><a href="">Palo Alto</a></li>
                        <li><a href="">Solarwinds</a></li>
                        <li><a href="">Kaseya</a></li>
                      </ul>
                    </li>

                    <li><a href="{{url('network')}}">Network & Communication</a></li>

                    <li class="dropdown"><a href="{{url('pcvolume')}}">PC Volume Business</a>
                      <ul class="dropdown-menu">
                        <li><a href="">HP</a></li>
                        <li><a href="">Lenovo</a></li>
                        <li><a href="">Dell</a></li>
                        <li><a href="">Acer</a></li>
                        <li><a href="">Asus</a></li>

                      </ul>
                    </li>

                    <li><a href="{{url('pcrental')}}">Rental Business</a></li>

                    <li class="dropdown"><a href="{{url('licensing')}}">Software Licensing & Subscription</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Microsoft</a></li>
                        <li><a href="">Autodesk</a></li>
                        <li><a href="">Adobe</a></li>
                      </ul>
                    </li>

                    <li><a href="{{url('infrastructure')}}">Data Center Infrastructure</a></li>

                    <li><a href="{{url('documentmanagement')}}">Document Management Solutions</a></li>

                    <li class="dropdown"><a href="{{url('services')}}">Professional Services</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Microsoft Services</a></li>
                        <li><a href="">SmartServe</a></li>
                      </ul>
                    </li>

                    <li class="dropdown"><a href="{{url('redhat')}}">Training & Education</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Red Hat</a></li>
                        <li><a href="">Pearson Vue</a></li>
                      </ul>
                    </li>

                    <li><a href="{{url('mobile')}}">Managed Services</a></li>

                    <li><a href="{{url('cloud')}}">Cloud Solutions</a></li>

                    <li class="dropdown"><a href="{{url('products')}}">Emerging Products</a>
                      <ul class="dropdown-menu">
                        <li><a href="">Varonis</a></li>
                        <li><a href="">Tenable</a></li>
                        <li><a href="">Gigamon</a></li>
                        <li><a href="">Forescout</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>   
                <!-- <li><a href="{{url ('home/about')}}" class="menu "><i class="fa fa-info" aria-hidden="true"></i> ABOUT</a></li> -->

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle menu" data-toggle="dropdown"><i class="fa fa-info" aria-hidden="true"></i> ABOUT US <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('home/about')}}">Profile</a></li>
                    <li><a href="">News and Updates</a></li>
                    <li><a href="{{url('awards2')}}">Awards</a></li>
                  </ul>
                </li>


                <!-- <li><a href="#partners" class="menu"><i class="fa fa-user" aria-hidden="true"></i> PARTNERS</a></li> -->
                <li><a href="{{url('home/contact')}}" class="menu"><i class="fa fa-phone" aria-hidden="true"></i> CONTACT US</a></li>

            <!--     <li class="dropdown">
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

