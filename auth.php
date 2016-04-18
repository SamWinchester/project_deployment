<?php 
error_reporting(0);
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 session_start(1);
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 #

$user_name =$_POST['username'] ;
$password = $_POST['password'] ;

 $_SESSION['USER_NAME']=$user_name;
  function usercode(){ 
    return $user_name;
  }

$query="Select password from credentials where username='$user_name'";

$ret = mysql_query($query,$conn);
$row=mysql_fetch_row($ret);
$pass=strval($row[0]);
if ($pass==$password) {
	header('location: http://localhost/part-2/project_sheet.php');
}
else{


echo("<script>alert('Authentication Failed ')</script>");

    echo("<script>window.location = 'http://localhost/part-2/index.html';</script>");

}
?>