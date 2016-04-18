<?php 
error_reporting(0);
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 #
 #echo "<script>alert($n)</script>";
 $mem = $_POST['member']; 
 $mem = intval($mem);
 $i=0;
 while ($i<$mem) {
 	$I =strval($i);
 	$name = 'n'.$I;
 	$email = 'e'.$I;
 	$user_id='u'.$I;
 
	$val1 = $_POST[$name];
	$VAL= $_POST['proj_id'];
	$check_query = "SELECT proj_id from proj_master where proj_id='$VAL'";
	$check = mysql_query($check_query);
	if(mysql_num_rows($check)=== 0)
	{
		echo("<script>alert('this project id is not present in project master')</script>");

    echo("<script>window.location = 'http://localhost/part-2/add_associate.php';</script>");
exit;

	}
	else{
	$val2=  $_POST[$email];
	$val3= $_POST[$user_id];
	
	$query = "INSERT INTO add_member(proj_id,emp_name, emp_email,user_id,status,comment) VALUES ('$VAL','$val1','$val2','$val3','NULL','-')";
	$que = "INSERT INTO `credentials`(`username`, `password`, `position`, `project_id`) VALUES ('$val3','ROOT','ASSOCIATE','$VAL')";
	$ret = mysql_query($que);
	  $retval = mysql_query($query , $conn) ; 
	$i=$i+1;
  }
}
 echo("<script>alert('Response Recorded')</script>");

    echo("<script>window.location = 'http://localhost/part-2/add_associate.php';</script>");


 ?>