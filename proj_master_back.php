<?php 

error_reporting(0);
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
include "project_master.php";

$pd = $_POST['proj_desc'];
$type=$_POST['type'];
$sd = $_POST['start_date'];
$ed = $_POST['end_date'];
$userid = $_POST['userid'];
$que = "INSERT INTO 
	proj_master(proj_id, proj_desc, proj_type, proj_start_date, proj_end_date) VALUES ('$row','$pd','$type','$sd','$ed')";
	$retval = mysql_query( $que, $conn );

$query = "INSERT INTO credentials(username, password, position, project_id) VALUES ('$userid','ROOT','MANAGER','$row')";
$ret = mysql_query($query ,$conn);
echo("<script>alert('Response Recorded ')</script>");

    echo("<script>window.location = 'http://localhost/part-2/add_associate.php';</script>");
 ?>