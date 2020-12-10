
<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
	window.location.href='my_order.php';
	</script>
	<?php
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-3.min.css" rel="stylesheet">
<script>
 function changeFunc() {
var selectBox = document.getElementById("selectBox");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
if (selectedValue=="Buyer"){
$('#textboxes').show();
}
else {
alert("You are about to login as farmer");
$('#textboxes').hide();
}
}
</script>
</head>


  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6  d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="post" action="login_submit.php">
                  <row>
                    <div class="col-md-6 text-center"> 
                    <img src="images/busm.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                      
                    
                    </div>
                    <div class="col-md-6 text-center"> 
                    <img src="images/busmn.png" alt="" srcset=""><br>
                      
                    </div>
                  </row>
                 
                    <div class="form-group">
                      <input type="text" name="email" id="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group text-center">
                        <label for="sel1">Select User Type:</label>
                        <select class=" form-control-user" id="selectBox" name="role" onchange="changeFunc();">
                          <option class="active" value="Buyer">Buyer</option>
                          <option value="Farmer">Farmer</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="reg.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?php require('footer.php')?>      