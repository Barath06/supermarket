<?
$host="localhost";
$user="root";
$password="";
$dbname="shopmarket";

mysql_connect($host,$user,$password);
mysql_select_db($dbname);

if(isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from newregister where username='".$username."'AND password='".$password."'limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
  echo "You Have Successfully Logged In";
  exit();
}
else{
 echo "You Have Entered Incorrect Password";
 exit();
}
}
?>