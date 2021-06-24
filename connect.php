<?php
  $username = $_post['username'];
  $location = $_post['location'];
  $password = $_post['password'];

  $conn = new mysqli('localhost','root','','database1');
  if($conn->connect_error){
       die('connection failed : '.$conn->connect_error);
   }else{
      $stmt = $conn->prepare("insert into shopinformation(username,location,password)
      values(?, ?, ?)");
      $stmt->blind_param("sss",$username, $location, $password);
      $stmt->execute();
      echo "registration successful......";
      $stmt->close();
      $conn->close();
}
?>


	if(empty($_POST['username']) || empty($_POST['password']))
	{
		header("location:webpage4.html?Empty= please Fill In The Blanks");
	}
	else{
		$query="SELECT * FROM newregister WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		$result=mysqli_query($con,$query);
		if(mysql_fetch_assoc($result))
		{
			$_SESSION['username']=$_POST['username'];
			header("location:database.html");
		}
		else{
			header("location:webpage4.html");
		}
	}
}
else{
	echo 'NOT WORKING NOW GUYS';
}
?>	