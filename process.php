<?php
require_once('connection.php');
session_start();
if(isset($_POST['Login']))
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		echo "<script>alert('username or password incorrect')</script>";
		header("location:webpage4.html");
	}
	else{
		$query="select * from newregister where username='".$_POST['username']."' and password='".$_POST['password']."'";
		$result=mysqli_query($con,$query);
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['username']=$_POST['username'];
			header("location:database.php");
		}
		else{
			echo "<script>alert('username or password incorrect')</script>";
			header("location:webpage4.html");
		}
	}
}
else{
	echo 'NOT WORKING NOW GUYS';
}
?>