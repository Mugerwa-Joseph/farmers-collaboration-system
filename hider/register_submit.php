<?php
require('connection.inc.php');
require('functions.inc.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$city=$_POST['city'];
$dstate=$_POST['dstate'];
$dcity=$_POST['dcity'];
$state=$_POST['state'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$type=$_POST['type'];
$password=hash('sha1','$password',FALSE);
if ($type=='farmer') {

	$curl = curl_init();
   $address1=rawurlencode($address);
   curl_setopt_array($curl, array(
	   CURLOPT_URL => "https://trueway-geocoding.p.rapidapi.com/Geocode?language=en&country=IN&address=$address1",
	   CURLOPT_RETURNTRANSFER => true,
	   CURLOPT_FOLLOWLOCATION => true,
	   CURLOPT_ENCODING => "",
	   CURLOPT_MAXREDIRS => 10,
	   CURLOPT_TIMEOUT => 30,
	   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	   CURLOPT_CUSTOMREQUEST => "GET",
	   CURLOPT_HTTPHEADER => array(
		   "x-rapidapi-host: trueway-geocoding.p.rapidapi.com",
		   "x-rapidapi-key: 3665a3639fmsh04a783ce9c61a9bp1ed5dejsnff6ae02df8af"
	   ),
   ));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
   echo "cURL Error #:" . $err;
   
} else {
   //echo $response;
   $res=json_decode($response);
   //print_r($res);
   $lat= $res->results[0]->location->lat;
   $long= $res->results[0]->location->lng;
}
$sql = "INSERT INTO user (firstname, lastname, username,phoneno,email,password,address,state,city) VALUES ('$firstname', '$lastname','$username',$phoneno,'$email','$password','$address','$state','$city')";
}else if($type=='buyer'){
 		
	$curl = curl_init();
	   $address1=rawurlencode($address);
	   curl_setopt_array($curl, array(
		   CURLOPT_URL => "https://trueway-geocoding.p.rapidapi.com/Geocode?language=en&country=IN&address=$address1",
		   CURLOPT_RETURNTRANSFER => true,
		   CURLOPT_FOLLOWLOCATION => true,
		   CURLOPT_ENCODING => "",
		   CURLOPT_MAXREDIRS => 10,
		   CURLOPT_TIMEOUT => 30,
		   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		   CURLOPT_CUSTOMREQUEST => "GET",
		   CURLOPT_HTTPHEADER => array(
			   "x-rapidapi-host: trueway-geocoding.p.rapidapi.com",
			   "x-rapidapi-key: 3665a3639fmsh04a783ce9c61a9bp1ed5dejsnff6ae02df8af"
		   ),
	   ));

   $response = curl_exec($curl);
   $err = curl_error($curl);

   curl_close($curl);

   if ($err) {
	   echo "cURL Error #:" . $err;
	   
   } else {
	   //echo $response;
	   $res=json_decode($response);
	   //print_r($res);
	   $lat= $res->results[0]->location->lat;
	   $long= $res->results[0]->location->lng;
   }


$sql = "INSERT INTO buyer (firstname, lastname, username,phoneno,email,password,address,state,city) VALUES ('$firstname', '$lastname','$username',$phoneno,'$email','$password','$address','$state','$city')";

}else if($type=='transport'){
 		
	$curl = curl_init();
	   $address1=rawurlencode($address);
	   curl_setopt_array($curl, array(
		   CURLOPT_URL => "https://trueway-geocoding.p.rapidapi.com/Geocode?language=en&country=IN&address=$address1",
		   CURLOPT_RETURNTRANSFER => true,
		   CURLOPT_FOLLOWLOCATION => true,
		   CURLOPT_ENCODING => "",
		   CURLOPT_MAXREDIRS => 10,
		   CURLOPT_TIMEOUT => 30,
		   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		   CURLOPT_CUSTOMREQUEST => "GET",
		   CURLOPT_HTTPHEADER => array(
			   "x-rapidapi-host: trueway-geocoding.p.rapidapi.com",
			   "x-rapidapi-key: 3665a3639fmsh04a783ce9c61a9bp1ed5dejsnff6ae02df8af"
		   ),
	   ));

   $response = curl_exec($curl);
   $err = curl_error($curl);

   curl_close($curl);

   if ($err) {
	   echo "cURL Error #:" . $err;
	   
   } else {
	   //echo $response;
	   $res=json_decode($response);
	   //print_r($res);
	   $lat= $res->results[0]->location->lat;
	   $long= $res->results[0]->location->lng;
   }

   $cost = $_POST['cost'];


$sql = "INSERT INTO transport (firstname, lastname, username,phoneno,email,password,address,state,city,latitude,longitude,cost) VALUES ('$firstname', '$lastname','$username',$phoneno,'$email','$password','$address','$state','$city','$lat','$long','$cost')";
}
if(mysqli_query($link, $sql)){
//echo "Records added successfully.";
header("Location:login.php");
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
//mysqli_close($link);
?>
<!-- $check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
$check_mobile=mysqli_num_rows(mysqli_query($con,"select * from users where mobile='$mobile'"));
if($check_user>0){
	echo "email_present";
}elseif($check_mobile>0){
	echo "mobile_present";
}else{
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into users(name,email,mobile,password,added_on) values('$name','$email','$mobile','$password','$added_on')");
	echo "insert";
}
?> -->