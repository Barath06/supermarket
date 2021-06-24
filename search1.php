
<?php
$conn = mysqli_connect("localhost", "root", "", "shopmarket");

if(mysqli_connect_errno()){
	echo "failed to connect";
}

?>

<?php
$output = '';
if(isset($_GET['productname']) && $_GET['productname'] !== ' '){
	$searchq = $_GET['productname'];
	$q = mysqli_query($conn,"SELECT * FROM productdetail WHERE productname LIKE '%$searchq%'") or die(mysqli_error());
	$c = mysqli_num_rows($q);
	if($c == 0){
		$output = 'NO RESULT FOUND for <br>"' . $searchq . '"</b>';
	}else{
		while($row = mysqli_fetch_array($q)){
			$shopname = $row['shopname'];
			$productname = $row['productname'];
			$productid = $row['productid'];
			$cost = $row['cost'];
			
			
			$output .='<a href="' . $productname . '">
			            <h3>' . $shopname . '</h3>
						    <h2>' . $cost . '</h2>
							</a>';
		}
	}
}else{
     header("location ./");
}
print("$output");
mysqli_close($conn)
?>


