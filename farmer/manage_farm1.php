<?php
require('top.inc.php');
isAdmin();
$farname='';
$location='';
$product='';


$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from farm where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$farname=$row['farname'];
		$location=$row['location'];
		$owner=$row['owner'];
		
	}else{
		header('location:farm.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$farname=get_safe_value($con,$_POST['farname']);
	$location=get_safe_value($con,$_POST['location']);
	$product=get_safe_value($con,$_POST['product']);

	
	$res=mysqli_query($con,"select * from farm where farname='$farname'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Username already exist";
			}
		}else{
			$msg="Username already exist";
		}
	}
	
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update farm set farname='$farname',location='$location',product='$product' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into farm(farname,location,product,status) values('$farname','$location','$product',1,1)");
		}
		header('location:farm.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Farm Management</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">farm name</label>
									<input type="text" name="farname" placeholder="Enter username" class="form-control" required value="<?php echo $farname?>">
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">Location</label>
									<input type="text" name="location" placeholder="Enter location" class="form-control" required value="<?php echo $location?>">
								</div>
								
								<div class="form-group">
									<label for="password" class=" form-control-label">product</label>
									<input type="text" name="product" placeholder="Enter product" class="form-control" required value="<?php echo $product?>">
								</div>
								
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>