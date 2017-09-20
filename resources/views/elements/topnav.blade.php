<!-- top navigation -->
<style type="text/css">
    .border-red{
        border-color:red;
    }
</style>
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
      


            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/user.png') }}" alt="">{{ Auth::User()->email }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        
                        <!-- <li style="cursor:pointer" data-toggle="modal" data-target="#profileModal"><a href="javascript:;">Profile</a></li> -->

                </li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>

  <div class="modal fade profile-modal" tabindex="-1" role="dialog" id="profileModal" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title"><label>User Profile</label>
            </span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12"> 
            </div>

            <div class="col-md-12">
              <div class="inner-panel col-md-12">
                  <div class="ip-title ">User Details</div>
                  <form method="POST" action="{{ url('/userdetails/update') }}" onsubmit="" id="form1">
                      <div class="ip-body  col-md-6" >
                          <div class="" style="height:330px">
                            <label>First Name</label><input type="text" class="form-control" id="fname" name = "fname" value="{{Auth::User()->fname}}"><br>
                            <center><span id="fname_error" style="display:none; color:red;">Required</span></center>
                            <label>Middle Name</label><input type="text" class="form-control" id="mname" name = "mname" value="{{Auth::User()->mname}}"><br> 
                            <center><span id="mname_error" style="display:none; color:red;">Required</span></center>
                            <label>Last Name</label><input type="text" class="form-control" id="lname" name = "lname" value="{{Auth::User()->lname}}"><br>
                            <center><span id="lname_error" style="display:none; color:red;">Required</span></center>
                            <label>Password</label><div class="password-wrapper"><button class="btn btn-info form-control change_pass">Change Password</button></div>
                            <center><span id="errormsg" style="display:none; color:red;">Required</span></center>
                          </div>
                      </div>
                       <div class="ip-body  col-md-6" >
                          <div class="" style="height:330px">
                            <label>Email:</label><input type="text" class="form-control" value="{{Auth::User()->email}}" style="cursor:not-allowed" readonly><br>
                            <label>Position:</label><input type="text" class="form-control" style="cursor:not-allowed" value="" readonly><br>
                            <label>Birthdate</label><input type="date" class="form-control" id="birthdate" name = "birthdate" value=""><br>
                            <center><span id="bd_error" style="display:none; color:red;">Required</span></center>
                            <label>Contact Details:</label><input type="text" class="form-control" id="contact" name = "contact_details" value=""><br>
                            <center><span id="contact_error" style="display:none; color:red;">Required</span></center>
                          </div>
                      </div>
                            <div class="col-md-12 update-wrapper"><button class="btn btn-success form-control update_details" style="width: 200px; height: 31px; margin-left: 155px;">Update</button></div>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<script>
    
</script>
  



