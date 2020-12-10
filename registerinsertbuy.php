<?php
$con=mysqli_connect("localhost","root","","ecom");
// Escape user inputs for security
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$city=$_POST['city'];
$state=$_POST['state'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$type=$_POST['role'];
$dstate=$_POST['dstate'];
$dcity=$_POST['dcity'];




 
 $password=hash('sha1','$password',FALSE);
// Attempt insert query execution
 

		 	
 
 		
 		


 	$sql = "INSERT INTO buyer (firstname, lastname, username,phoneno,email,password,address,state,city) VALUES ('$firstname', '$lastname','$username',$phoneno,'$email','$password','$address','$state','$city')";

 		
 		

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
	header("Location:login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
//mysqli_close($link);
?>
