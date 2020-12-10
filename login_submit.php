<?php
require('connection.inc.php');
require('functions.inc.php');

$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);
$type=$_POST['role']; 
$password1=hash('sha1','$password',FALSE);

if ($type=='Farmer') {
	$res=mysqli_query($con,"select * from farmer where email='$email' and password='$password1'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['ADMIN_LOGIN']='yes';
	$_SESSION['ADMIN_ID']=$row['id'];
	$_SESSION['ADMIN_USERNAME']=$email;
	$_SESSION['ADMIN_ROLE']=$row['role'];
	header('location:farmer/categories.php');
	die();
	
	
	
	
}else{
	echo "wrong iyo";
}
}
 elseif ($type=='Buyer') {
	$res=mysqli_query($con,"select * from buyer where email='$email' and password='$password1'");
	$check_user=mysqli_num_rows($res);
	if($check_user>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['USER_LOGIN']='yes';
		$_SESSION['USER_ID']=$row['id'];
		$_SESSION['USER_NAME']=$row['firstname'];
		
		header("Location:index.php");
	}else{
		echo "wrong";
	}
 }else {
	 echo "please register to again";
 }

?>