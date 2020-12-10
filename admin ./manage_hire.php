<?php
require('top.inc.php');

$name='';
$image='';
$descr='';
$dcity='';
$dstate='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from equipment where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['username'];
		$image=$row['image'];
		$descr=$row['descr'];
		$dcity=$row['dcity'];
		$dstate=$row['dstate'];
		
		
		
		
		
	}else{
		header('location:hire.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$image=get_safe_value($con,$_POST['image']);
	$descr=get_safe_value($con,$_POST['descr']);
	$dcity=get_safe_value($con,$_POST['dcity']);
	$dstate=get_safe_value($con,$_POST['dstate']);

	
	
	$res=mysqli_query($con,"select * from equipment where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Equipment already exist";
			}
		}else{
			$msg="Equipment already exist";
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
				move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$img);
				$update_sql="update equipment set name='$name',image='$img',descr='$descr',dcity='$dcity',dstate='$dstate' where id='$id'";
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
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update equipment set name='$name',image='$image',descr='$descr',dcity='$dcity',dstate='$dstate' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into equipment(name,image,descr,dcity,dstate) values('$name','$image','$descr','$dcity','$dstate')");
		}
		header('location:vendor_management.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Equipment Management</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">Name</label>
									<input type="text" name="name" placeholder="Enter username" class="form-control" required value="<?php echo $name?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">Descr</label>
									<input type="text" name="descr" placeholder="Enter email" class="form-control" required value="<?php echo $descr?>">
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