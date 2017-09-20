<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>mgenesis.com</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/user.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        
        <br />
          
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                        <li ><a href="{{url('/admin')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>

                <!--         <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none;">
                                <li>
                                    <a href='{{ url("employees") }}'>Menu</a>
                                </li>
                                <li>
                                    <a href='{{ url("clients") }}'>Menu</a>
                                </li>
                            </ul>
                        </li> -->
                        
                        <li><a href="{{url('coursecategory')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> CourseCategories</a></li>

                        <li><a ><i class="fa fa-calendar" aria-hidden="true"></i> Schedule <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none">
                                <li>
                                    <a href='{{ url("training") }}'>Trainings</a>
                                </li>
                            </ul>
                        </li>


                        <li><a href="{{url('data')}}"><i class="fa fa-database"></i> Data</a></li>
                        <!-- <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a> -->
                            <ul class="nav child_menu" style="display: none">
                                <li>
                                    <a href='{{ url("users") }}'>Menu</a>
                                </li>

                                <li>
                                    <a href='{{ url("posusers") }}'>Menu</a>
                                </li>
                                <li>
                                    <a href='{{ url("positions") }}'>Menu</a>
                                </li>

                                <li>
                                    <a href='{{ url("accesstypes") }}'>Menu</a>
                                </li>
        
                            </ul>
                        </li>
                </ul>
            </div>

        </div>
   
        <div class="sidebar-footer hidden-small">   
            <a href="{{ url('settings') }}" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
       
    </div>
</div>




 
</div>

