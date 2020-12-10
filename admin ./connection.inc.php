<?php
session_start();
$con=mysqli_connect("localhost","root","","Ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/aa');
define('SITE_PATH','http://localhost/aa/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'/media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'/media/product/');
?>
