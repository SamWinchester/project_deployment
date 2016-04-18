<?php 
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 #session_start(10);
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 #

$user_name =$_POST['username'] ;
$password = $_POST['password'] ;
session_start(23);

 $_SESSION['USER_NAME']=$user_name;

$query="SELECT password from credentials where username='$user_name'";
$que = "SELECT position from credentials where username='$user_name'";

$ret = mysql_query($query,$conn);

$row=mysql_fetch_row($ret);

$pass=strval($row[0]);
$ret_val = mysql_query($que,$conn);
$pos = mysql_fetch_row($ret_val);

$post=strval($pos[0]);
if ($pass==$password&&$post=='MANAGER') {
	header('location: http://localhost/part-2/query_pro.php');
}
else{


echo("<script>alert('Authentication Failed ')</script>");

    echo("<script>window.location = 'http://localhost/part-2/manager_login.html';</script>");

}
?>