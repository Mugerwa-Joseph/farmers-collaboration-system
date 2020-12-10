<?php
require('top.inc.php');

$condition='';
$condition1='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and equipment.added_by='".$_SESSION['ADMIN_ID']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_ID']."'";
}
$name='';
$image='';
$state='';
$city='';
$added_by='';
$descr='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from equipment where id='$id' $condition1");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$image=$row['image'];
		$descr=$row['descr'];
		$added_by=$row['added_by'];
		$city=$row['city'];
		$state=$row['state'];
	}else{
		header('location:equipment.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$image=get_safe_value($con,$_POST['image']);
	$added_by=get_safe_value($con,$_POST['added_by']);
	$descr=get_safe_value($con,$_POST['descr']);
	$state=get_safe_value($con,$_POST['state']);
	$city=get_safe_value($con,$_POST['city']);

	
	$res=mysqli_query($con,"select * from equipment ");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="equipment already exist";
			}
		}else{
			$msg="equipment already exist";
		}
	}
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
				$update_sql="update equipment set name='$name',image='$image',descr='$descr',city='$city',state='$state' where id='$id'";
			}else{
				$update_sql="update product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword',best_seller='$best_seller',state='$state',city='city',sub_categories_id='$sub_categories_id' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
			mysqli_query($con,"insert into equipment(name,image,descr,dcity,dstate) values('$name','$image','$descr','$dcity','$dstate')");
		}
		header('location:hire.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>equipment</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								<div class="form-group">
									<label for="categories" class=" form-control-label">Equipment Name</label>
									<input type="text" name="name" placeholder="Enter equipment mrp" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Added By</label>
									<input type="text" name="added_by" placeholder="Enter equipment price" class="form-control" required value="<?php echo $added_by?>">
								</div>
								
								
									<div class="row form-group  ">
								<div class="col-md-12 ">Farm Location</div>
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
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="descr" placeholder="Enter equipment short description" class="form-control" required><?php echo $descr?></textarea>
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
		 
		 <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
		 </script>
         
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