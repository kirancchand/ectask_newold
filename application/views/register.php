<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/iCheck/square/blue.css">




  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 
  <style type="text/css">
  
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
height: 100%;
padding : 60px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}

label.error{
    width: 100%;
    color: red;
    font-style: italic;
    margin-left: 5px;
    margin-bottom: 5px;
}
input.error {
    border: 1px dotted red;
}
select.error {
    border: 1px dotted red;
}
 </style>
</head>


<body class="hold-transition register-page">


<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Register Now</h2>
		    <form id="first_form" method="post" action="<?php echo site_url('indexroute/registeraction'); ?>">  
     
      <div class="form-group has-feedback">
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name"  autofocus="autofocus">
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>

      <div class="form-group has-feedback">
        <select class="form-control" id="unit" name="unit" autofocus="autofocus">
        <option value=''>Select your Unit</option>
        
       <?php
        foreach ($unit as $key => $value) {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['unit']; ?></option>
        <?php
        }
        ?>
        </select>
      </div>

<div class="form-group has-feedback">
<select class="form-control" id="designation" name="designation" autofocus="autofocus">
        <option value=''>Select your designation</option>

<?php
        foreach ($designation as $key => $value) {
        ?>
        <option value=<?php echo $value['id']; ?>><?php echo $value['designation']; ?></option>
        <?php
        }
        ?>
        </select>
      </div>


  <div class="form-group has-feedback">
        <input type="text" name="pen" id="pen" class="form-control" placeholder="Permanet Employee Number"  autofocus="autofocus">
        <!-- <span class="glyphicon glyphicon-pencil form-control-feedback"></span> -->
      </div>

 <div class="form-group has-feedback">
        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number"  autofocus="autofocus">
        <!-- <span class="glyphicon glyphicon-phone form-control-feedback"></span> -->
      </div>

  <div class="form-group has-feedback">
        <input type="text" name="email" id="email" class="form-control" placeholder="Email Address"  autofocus="autofocus">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>

   <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password"  autofocus="autofocus">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>   
      <input type="hidden" name="device_id" id="device_id" value="0">
      
      
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div> -->
        </div>
        <div class="col-xs-4">
          <button type="submit" value="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- <div>
    <input type="submit" value="Submit" />
  </div> -->
      </div>
    </form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2> ID Centre</h2>
            <p>Lorem ipsum dolor sit amet</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>ID Centre </h2>
            <p>Lorem ipsum dolor sit amet</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>ID Centre</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>


<script>

$(document).ready(function() {
    $("#first_form").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength:10
            },
          
            password: {
                required: true,
                minlength: 6
            },
            unit:{
              required:true,
           },
           designation:{
             required:true,
           },
           pen:{
             required:true,
           },
        
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            unit:"Please select the unit",
            designation:"Please select the designation",
            pen:"Please enter your pen number",
            mobile: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value",
                minlength:"mobile number must be 10 numbers long"
            },

            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
           
        }
    });
});
</script> 
</body>
</html>
