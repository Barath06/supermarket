<?php
  $username = $_POST['username'];
  $location = $_POST['location'];
  $password = $_POST['password'];

  if (!empty($username) || !empty($location) || !empty($password) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "shopmarket";
  


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){ die('connect error ('. mysqli_connect_error() .') ' . mysqli_connect_error());
}
else{

  $SELECT = "SELECT username FROM newregister WHERE username = ? Limit 1";


$INSERT = "INSERT INTO newregister (username , location , password)values(?,?,?)";



$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt->bind_result($username);
$stmt->store_result();
$rnum = $stmt->num_rows;

 if($rnum==0) {
 $stmt->close();
 $stmt = $conn->prepare($INSERT);
 $stmt->bind_param("sss", $username,$location,$password);
 $stmt->execute();
 echo "New record inserted successfully";
}else{
echo "someone already registered using this username";
}
$stmt->close();
$conn->close();
}
}else{
 echo "all fields are required";
 die();
}
?>

