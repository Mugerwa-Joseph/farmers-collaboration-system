<?php
require('top.inc.php');
isAdmin();
$condition='';
$condition1='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and farmer.added_by='".$_SESSION['ADMIN_ID']."'";
	$condition1=" and added_by='".$_SESSION['ADMIN_ID']."'";
}

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update farm set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from farm where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select farm.*,farmer.username,farmer.id from farm,farmer where farm.added_by=farmer.id  $condition1 order by farm.id desc ";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Farm Management </h4>
				   <h4 class="box-link"><a href="manage_farm.php">Add Farm</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   
							   <th width="2%">Farm Id</th>
							   <th width="20%">Farm Name</th>
							   <th width="10%">Products</th>
							   <th width="20%">Farmer Name</th>
							   <th width="20%">Location</th>
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   
							   <td><?php echo 'FA00'.$row['id']?></td>
							   <td><?php echo $row['farname']?></td>
							   <td><?php echo $row['product']?></td>
							   <td><?php echo $row['username']?></td>
							   <td><?php echo $row['dcity'].' '.$row['dstate']?></td>
							   
							  
							   <td>
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit'><a href='manage_farm.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>