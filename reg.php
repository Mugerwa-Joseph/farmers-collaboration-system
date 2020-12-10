<?php require('top.php')?>
<head>

  
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-3.min.css" rel="stylesheet">
  <script src="cities.js"></script>
  <script>
          function show(value){
              var a=document.getElementById('farmd');
              
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
              <div class="row">
                    <div class="col-sm-6 text-center"> 
                    <a href="register.php"><img src="images/busmn.png" alt="" srcset=""></a>
                        <h3>Farmer</h3>
                     </div>
                    <div class="col-sm-6 text-center"> 
                    <a href="regbuy.php"><img src="images/busm.png" alt="" srcset=""></a>
                        <h3>Buyer</h3>
                    </div>
               </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/sb-admin-2.min.js"></script>
  <?php require('footer.php')?>      
