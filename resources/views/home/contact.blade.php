@extends('app')
@section('css')
  <style type="text/css">
    #about{
      background: url('../images/contact-bg2.jpeg');
      background-attachment: fixed;
      background-size: cover;
      color: #fff!important; 
      overflow: hidden;
      height: 100%;
      position: relative;
      font-size: 17px;
    }

  </style>
@endsection
@section('content')
<!-- <div class="divider"></div> -->

<div id="about">
<div class="overlay"></div>
  <div class="row">
  <div class="container">
    <!-- <div class="border-line"></div> -->
    <div class="row" style="padding: 0 40px;">
      <div class="col-md-12">
    <h2 class="margin text-center" style="color: #fff!important;">CONTACT US</h2>
    
        <p><span class="glyphicon glyphicon-map-marker"></span>Address:  Ground Floor Alegria Annex Building, 2229 Chino Roces Ave., Makati City 1231, Philippines</p><br>
        <p><span class="glyphicon glyphicon-envelope"></span> Email: info@mgenesis.com</p><br>
        <p><i class="fa fa-phone"></i> Phone: +02 750-7000</p><br>
        <p><i class="fa fa-fax"></i> Fax: +632.892.6710</p><br>
        <p><i class="fa fa-headphones"></i> Support: +63.2.576.8585</p><br>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-xs-12">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.9086091210734!2d121.01376051541389!3d14.547218589836513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9143c7aa47b%3A0x25722bb24e7e5f9b!2sMicrogenesis+Business+Systems!5e0!3m2!1sen!2sph!4v1496286655295" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
</div>

  <br>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="container">
          <form class="well form-horizontal" action="{{url('contact/store')}}" method="POST"  onsubmit="false" id="contact_form">
          
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <fieldset>
              <!-- Form Name -->
              <legend class="text-center">Contact Us Today!</legend>

                  <p class="text-center">Drop a message.</p>

              <!-- Text input-->

              <div class="form-group">
                <label class="col-md-4 control-label">Full Name</label>  
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="full_name" id="full_name" placeholder="Full Name" class="form-control"  type="text">
                  </div>
                </div>
              </div>

              <br>

              <!-- Text input-->

      <!--         <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label> 
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="last_name" id="last_name" placeholder="Last Name" class="form-control"  type="text">
                  </div>
                </div>
              </div> -->

              <!-- Text input-->
                     <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
                  </div>
                </div>
              </div>

              <br>

              <!-- Text input-->
                     
        <!--       <div class="form-group">
                <label class="col-md-4 control-label">Phone #</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="phone" id="phone" placeholder="Phone" class="form-control" type="text">
                  </div>
                </div>
              </div> -->

              <!-- Text input-->
                    
        <!--       <div class="form-group">
                <label class="col-md-4 control-label">Address</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input name="address" id="address" placeholder="Address" class="form-control" type="text">
                  </div>
                </div>
              </div> -->

              <!-- Text input-->
               
              <div class="form-group">
                <label class="col-md-4 control-label">Subject</label>  
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                <input name="subject" id="subject" placeholder="Subject" class="form-control"  type="text">
                  </div>
                </div>
              </div>

              <br>

              <!-- Select Basic -->
       <!--        <div class="form-group"> 
                <label class="col-md-4 control-label">State</label>
                  <div class="col-md-4 selectContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="state" class="form-control selectpicker" >
                    <option value=" " >Please select your state</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option >Arizona</option>
                    <option >Arkansas</option>
                    <option >California</option>

                  </select>
                </div>
              </div>
              </div> -->

              <!-- Text area -->
                
              <div class="form-group">
                <label class="col-md-4 control-label">Message</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" cols="90"></textarea>
                </div>
                </div>
              </div>

              <br>

              <!-- Success message -->
              <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>


              <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                  <button type="button" class="send btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
              </div>
              </fieldset>
          </form>
              <!-- Button -->
    </div>
 </div>
</div><!-- /.container -->
</div>


@endsection

@section('js-logic')

<script type="text/javascript">
  
    function clear(){
    $('input, select, textarea').val("");
  }

</script>



@endsection