<?php
  $shopname = $_POST['shopname'];
  $productname = $_POST['productname'];
  $productid = $_POST['productid'];
  $cost = $_POST['cost'];

  if (!empty($shopname) || !empty($productname) || !empty($cost) || !empty($productid) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "shopmarket";
  


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){ die('connect error ('. mysqli_connect_error() .') ' . mysqli_connect_error());
}
else{

  $SELECT = "SELECT productid FROM productdetail WHERE productid = ? Limit 1";


$INSERT = "INSERT INTO productdetail (shopname , productname , productid, cost)values(?,?,?,?)";



$stmt = $conn->prepare($SELECT);
$stmt->bind_param("i",$productid);
$stmt->execute();
$stmt->bind_result($productid);
$stmt->store_result();
$rnum = $stmt->num_rows;

 if($rnum==0) {
 $stmt->close();
 $stmt = $conn->prepare($INSERT);
 $stmt->bind_param("ssii", $shopname,$productname,$productid,$cost);
 $stmt->execute();
 echo "New record inserted successfully";
}else{
echo "you have already registered this item";
}
$stmt->close();
$conn->close();
}
}else{
 echo "all fields are required";
 die();
}
?>
?>



