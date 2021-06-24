<?php
session_start();
$conn = mysqli_connect("localhost","root","");
if($conn){
	echo "connection succesful";
}
else{
	echo "no connection";
}
mysqli_select_db($conn, "shopmarket");
$username = $_POST['username'];
$password = $_POST['password'];
$q = " SELECT * FROM newregister WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);


if($num == 1){
	header('location:database.php');
}else{
	
	echo "<script>alert('username or password incorrect')</script>";
	
	header('location:webpage4.html');
}
?>
