<!-- <div class="bodies">
	<div class="masthead segment">
	  <div class="ui page grid">
	    <div class="column">
	      <div class="introduction">
	        <h1 class="ui inverted header">
	          <span class="text"><img src="{{asset('images/navbar-logo2.png')}}"> <a href="https://www.semantic-ui.com/" target="_new">Microgenesis UI</a></span>
	        </h1>        
	        <div class="ui hidden divider"></div>        
	      </div>      
	    </div>
	  </div>
	</div>
</div> -->
<header class="hidden-xs">
<!-- <div style="width: 100%;"></div> -->
	<!-- <div class="overlay"></div> -->
	<!-- <div id="bg-image" class="img-responsive" ></div> -->
<div class="bodies">
	<div class="masthead segment">
	  <div class="ui page grid">
	    <div class="column">
	      <div class="introduction">
	        <h1 class="ui inverted header">
	          <span class="text" style="color: aqua;"> <a href="https://www.semantic-ui.com/" target="_new">
	          <!-- MICROGENESIS -->

<!-- 	          class="bodies" style="width: 100%; background-image: -webkit-radial-gradient(farthest-corner, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6));
  background-image: radial-gradient(farthest-corner, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6));" -->
	          <div >
	          	<img src="{{asset('images/Mgen Logo-stroke.png')}}" style="display: none;" id="head-logo" class="img-responsive responsive-img">
	          	<!-- <img src="{{asset('images/Mgen Logo.svg')}}" style="display: none;width: 400px; height: 150px;" id="head-logo"> -->

	          </div>
	          </a></span>
	        </h1>        
	        <div class="ui hidden divider"></div>        
	      </div>      
	    </div>
	  </div>
	</div>
</div>

	<!-- <div id="logo-cont" class="hidden-xs"><img src="{{ asset('images/mgen-logo.png')}}"  id="head-logo" style="display: none;" class="img-responsive"></div> -->
	<nav>
		<div id="navbar" class="container hidden-xs">
			<ul class="list-inline" id="navigation">
				<li class="menus"><a href="{{url('/')}}"><i class="fa fa-home icons" aria-hidden="true"></i> Home</a></li>

				<li class="head-sub-menu-parent menus">
					<a><i class="fa fa-cogs" aria-hidden="true"></i> Product & Services <span class="caret"></span></a>

					<ul class="head-sub-menu">

						<li class="head-sub-sub-menu-parent"><a href="{{url('datacenter')}}">Data Center & Cloud<small><span class="glyphicon glyphicon-menu-right pull-right" style="position: relative; left: ;top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('dc-servers')}}">Server</a></li>
								<li><a href="{{url('dc-storage')}}">Storage</a></li>
								<li><a href="{{url('dc-virtualization')}}">Virtualization</a></li>
							</ul>
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('informationsecurity')}}">IT Security<small><span class="glyphicon glyphicon-menu-right pull-right" style="position: relative; top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('sophos')}}">Sophos</a></li>
								<li><a href="{{url('paloalto')}}">Palo Alto Networks</a></li>
								<li><a href="{{url('solarwinds')}}">Solarwinds</a></li>
								<li><a href="{{url('kaseya')}}">Kaseya</a></li>
							</ul>
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('network')}}">Network & Communications</a>
						<!-- 	<ul class="head-sub-sub-menu">
								<li><a href="">Cisco</a></li>
								<li><a href="">Huawei</a></li>
								<li><a href="">HP</a></li>
							</ul> -->
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('pcvolume')}}">PC Volume Business<small><span class="glyphicon glyphicon-menu-right pull-right" style="position: relative; top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('hp')}}">HP</a></li>
								<li><a href="{{url('lenovo')}}">Lenovo</a></li>
								<li><a href="{{url('dell')}}">Dell</a></li>
								<li><a href="{{url('acer')}}">Acer</a></li>
								<li><a href="{{url('asus')}}">Asus</a></li>
							</ul>
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('pcrental')}}">Rental Business</a>
							<!-- <ul class="head-sub-sub-menu">
								<li><a href="">Laptops</a></li>
								<li><a href="">Desktops</a></li>
								<li><a href="">Projectors</a></li>
								<li><a href="">Training Venue</a></li>
							</ul> -->
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('licensing')}}">Software Licensing & Subscription<small><span class="glyphicon glyphicon-menu-right pull-right" style="top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('microsoft')}}">Microsoft</a></li>
								<li><a href="{{url('autodesk')}}">Autodesk</a></li>
								<li><a href="{{url('adobe')}}">Adobe</a></li>
							</ul>
						</li>

						<li><a href="{{url('infrastructure')}}">Data Center Infrastructure</a></li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('documentmanagement')}}">Document Management Solutions</a>
						<!-- 	<ul class="head-sub-sub-menu">
								<li><a href="">Fujixerox Docushare</a></li>
							</ul> -->
						</li>


						<li class="head-sub-sub-menu-parent"><a href="{{url('services')}}">Professional Services </a>
						<!-- 	<ul class="head-sub-sub-menu">
								<li><a href="{{url('ms-proffservices')}}">Microsoft Services</a></li>
								<li><a href="{{url('smartserve')}}">Smartserve</a></li>
							</ul> -->
						</li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('education')}}">Trainings & Education<small><span class="glyphicon glyphicon-menu-right pull-right" style="position: relative; top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('redhat')}}">Red Hat</a></li>
								<li><a href="{{url('pearsonvue')}}">Pearson Vue</a></li>
							</ul>
						</li>

						<li><a href="{{url('mobile')}}">Managed Services</a></li>

						<li><a href="{{url('cloud')}}">Cloud Solutions</a></li>

						<li class="head-sub-sub-menu-parent"><a href="{{url('products')}}">Emerging Products <small><span class="glyphicon glyphicon-menu-right pull-right" style="position: relative; top: 5px;"></span></small></a>
							<ul class="head-sub-sub-menu">
								<li><a href="{{url('varonis')}}">Varonis</a></li>
								<li><a href="{{url('tenable')}}">Teenable</a></li>
								<li><a href="{{url('gigamon')}}">Gigamon</a></li>
								<li><a href="{{url('forescout')}}">Forescout</a></li>
							</ul>
						</li>
					</ul>
				</li>


				<li class="head-sub-menu-parent menus">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info" aria-hidden="true"></i> About <span class="caret"></span></a>
					<ul class="head-sub-menu">
						<li><a href="{{url('home/about')}}">Profile</a></li>
						<!-- <li><a href="">News and Updates</a></li> -->
						<li><a href="{{url('awards2')}}">Awards</a></li>
						<li><a href="{{url('certificate')}}">Accreditations & Certifications</a></li>
					</ul>
				</li>

				<li class="menus"><a href="{{url('home/contact')}}"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>


				<li class="menus dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
				<ul class="dropdown-menu searchbox" style="width: 250px;">
					<li>
						<form class="navbar-form" role="search">
					        <div class="input-group">
					            <input type="text" class="form-control" placeholder="Search" name="q" id="searching" autocomplete="off">
					            <div class="input-group-btn">
					                <button class="btn btn-default searching"><i class="glyphicon glyphicon-search"></i></button>
					            </div>
					        </div>
				        </form>
					</li>
				</ul>
				</li>

	<!-- 			<div id="Navsearch" class="overlays">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

					<div class="overlay-content">
						<div class="wrap">
						   <div class="search">
						      <input type="text" class="searchTerm" placeholder="What are you looking for?">
						      <button type="submit" class="searchButton">
						        <i class="fa fa-search"></i>
						     </button>
						   </div>
						</div>
					</div>
				</div> -->




			</ul>	
		</div>
	</nav>
</header>
