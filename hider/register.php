<?php require('top.php')?>
<head>

  
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-3.min.css" rel="stylesheet">
  <script src="cities.js"></script>
  <script>
          function show(value){
              var a=document.getElementById('dstate');
              var a=document.getElementById('dcity');
              if(value=="farmer")
              {
              
                a.style.display="block";
              }
              else
              {
                a.style.display="none";
              }
          }
          
        </script>
</head>


<body class="bg-gradient-prirmary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">        
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" id="first_form" method="post" action="registerinsert.php">
                  <div class="row">
                    <div class="col-sm-6 text-center"> 
                      <img src="images/bussmn.png" alt="" srcset="">
                        <input type="radio" name="type" id="farmer" value="buyer" checked onclick="show('farmer')"> Buyer
                     </div>
                    <div class="col-sm-6 text-center"> 
                        <img src="images/bussmn.png" alt="" srcset="">
                        <input type="radio" name="type" id="transport" value="farmer" onclick="show('transport')"> Farmer<br>
                    </div>
                 </div>
                
                  <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" id="first_name" name="firstname" class="form-control form-control-user" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" id="last_name" name="lastname" class="form-control form-control-user" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" id="email" name="email" class="form-control form-control-user" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="Username">
                  </div>
                  <div class="col-sm-6">
                    <input type="telphone" id="phoneno" name="phoneno" class="form-control form-control-user" placeholder="Phone No.">
                  </div>
                </div>
                <div class="form-group">
                  <textarea type="text" id="address" name="address" rows="2" cols="5" class="form-control form-control-user" placeholder="H.No Street(Product Address)" style="border-radius: 30px;"></textarea>
                </div>
                <div class="row form-group  ">
                <div class="col-md-12 text-center">Farmer's Location</div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select onchange="print_city('city', this.selectedIndex);" id="state" name ="state" class="form-control " required style="border-radius: 30px;"></select>
                  </div>
                  <div class="col-sm-6">
                    <select id ="city" name="city" class="form-control " required style="border-radius: 30px;"></select>
                    <script language="javascript">print_state("state");</script>
                  </div>
                </div>
                <div class="row form-group  ">
                <div class="col-md-12 text-center">Farm/Gardern Location</div>
                </div>
                    <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                    <select onchange="print_city('dcity', this.selectedIndex);" id="dstate" name ="dstate" class="form-control " required style="border-radius: 30px;"></select>
                  </div>
                  <div class="col-sm-6">
                    <select id ="dcity" name="dcity" class="form-control " required style="border-radius: 30px;"></select>
                    <script language="javascript">print_state("dstate");</script>
                  </div>
                </div>

               
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" id="cpassword" name="cpassword" class="form-control form-control-user" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" id="formsubmit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/sb-admin-2.min.js"></script>
  <?php require('footer.php')?>      
