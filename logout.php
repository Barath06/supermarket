<?php
session_start();
if(isset($_GET['Logout']))
{ session_destroy();
	header("location:webpage4.html");

}
else
{   session_destroy();
	header("location:webpage4.html");
	
}
?>