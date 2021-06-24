<?
$conn = mysqli_connect("localhost", "root", "", "shopmarket");

session_start();
$user_check = $_SESSION['login_username'];
$query = "SELECT username from newregister WHERE username = '$user_check'";
$ses_sql = mysql_query($conn, $query);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>