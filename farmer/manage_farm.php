<?php
require('top.inc.php');

$condition='';
$condition1='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and farm.added_by='".$_SESSION['ADMIN_ID']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_ID']."'";
}
$farmer_id='';
$farname='';
$product='';
$dstate='';
$dcity='';

$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from farmer where id='$id' $condition1");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		
		$farmer_id=$row['farmer_id'];
		$farname=$row['farname'];
		$product=$row['product'];
		$dstate=$row['district'];
		$dcity=$row['county'];
	}else{
		header('location:farm.php');
		die();
	}
}

if(isset($_POST['submit'])){
	
	$farname=get_safe_value($con,$_POST['farname']);
	$dcity=get_safe_value($con,$_POST['dcity']);
	$dstate=get_safe_value($con,$_POST['dstate']);
	$product=get_safe_value($con,$_POST['product']);

	
	$res=mysqli_query($con,"select * from farm where name='$farname' and $condition1");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="farm already exist";
			}
		}else{
			$msg="farm already exist";
		}
	}

	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update farm set farname='$farname',dcity='$dcity',dstast='$dstate'product='$product' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into farm(farname,dcity,dstate,product,added_by) values('$farname','$dcity','$dstate','$product','".$_SESSION['ADMIN_ID']."')");
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
							   
								
								<div class="form-group ">
									<label for="username" class=" form-control-label">Farm name</label>
									<input type="text" name="farname" placeholder="Enter farmname" class="form-control form-control-user" required value="<?php echo $farname?>">
								</div>
								
								<div class="row form-group  ">
								<div class="col-md-12 ">Farm Location</div>
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
								
								
								<div class="form-group">
									<label for="password" class=" form-control-label">Product</label>
									<input type="text" name="product" placeholder="Enter product" class="form-control form-control-user" required value="<?php echo $product?>">
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
<script>
<?php
if(isset($_GET['id'])){
?>
get_sub_cat('<?php echo $sub_categories_id?>');
<?php } ?>
</script>