<?php
include('login.php');


if(isset($_session['login_username'])){
header("location: welcome.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<title>login</title>
<style>
.login{
width:360px;
margin:50px auto;
border-radius:10px solid blue;
padding:10px 40px 25px;
margin-top:70px;
}
input[type=text], input[type=password]{
width:9%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
}
input[type=submit]{
width:9%;
background-color:#009;
color=#fff;
border:2px solid #DGF;
padding:10px;
border-radius:5px;
cursor:pointer;
margin-bottom:15px;
}
</style>
</head>

<body style="background-image:url('is (2).jpg'); background-repeat: no-repeat; max-width:100%;">
          

<h1 align="center"> market owner verification </h1>
<form action="" method="POST" style="text-align:center;">
   Username:<br>
   <input type="text" name="username" required>
   <br>
   Password:<br>
   <input type="password" name="password" required><br>
<br>
<input type="submit" value="Submit">
<!...Error Message...>
<span><?php echo $error; ?></span>
</form>
</body>
</html>