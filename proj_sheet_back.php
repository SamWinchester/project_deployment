<?php 
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 session_start(1);

 $US = $_SESSION['USER_NAME'];
 $comment=$_POST['comment'];
 if(isset($_POST['accept']))
 {
 	
 
 $query =" UPDATE add_member SET status='ACCEPTED',comment='$comment' WHERE user_id='$US'";

 $ret = mysql_query($query,$conn);

 $Q = "DELETE FROM credentials WHERE username='$US'";
  $ret = mysql_query($Q,$conn);

}
if(isset($_POST['reject']))
{
	

 $query =" UPDATE add_member SET status='REJECTED',comment='$comment' WHERE user_id='$US'";

 $ret = mysql_query($query,$conn);

 $Q = "DELETE FROM credentials WHERE username='$US'";
  $ret = mysql_query($Q,$conn);

}

session_destroy();
echo("<script>alert('RESPONSE RECORDED ')</script>");

    echo("<script>window.location = 'http://localhost/part-2/index.html';</script>");

 ?>