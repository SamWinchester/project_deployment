

<!DOCTYPE html>
<html>
<head>
	<title>query page</title>
	<style type="text/css">
	body{
		text-align: center;
	}
input{
	width: 200px;
height: 35px;
text-align: center;
}
button{
	width: 10%;
	border: 1px solid black;
	border-radius: 7px;
	height: 35px;
}
body{
	margin:50px;
}
tr{
height: 50px;
padding: 15px;

}
table{
	margin: 10px;
	padding: 15px;
}

	</style>



</head>
<body><center>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="Enter the Project Id" name="proj_id"></input>
<br><br>
<!--<button name ="delete">DELETE</button>-->
	<button name="submit">SUBMIT</button>
</form>

</center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$server = 'localhost';
	session_start(23);
//	$US =  $_SESSION['USER_NAME'];
	if (!isset($_SESSION['USER_NAME'])) {
		echo("<script>alert('Authentication Failed ')</script>");
		echo("<script>window.location = 'http://localhost/part-2/manager_login.html';</script>");
	}
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 $project =$_POST['proj_id'];
 
 	 $query= "SELECT * from add_member where proj_id='$project'";
 
$retval = mysql_query($query) ;

echo "<html><body style='font-weight:bold;'><br><br><table border='1'<tr><td>PROJECT ID</td><td>NAME OF THE ASSOCIATE</td><td>ASSOCIATE EMAIL ID</td>
 	<td>ASSOCIATE USER ID</td><td width='12	0'>STATUS</td><td width='280'>COMMENTS ABOUT THE DECISION</td>
 	
 	</tr>";
 while ($row=mysql_fetch_row($retval)) {
$temp=strval($row[4]);

 if (!strcmp($temp,'REJECTED')){
	echo "<tr style='background:red; color:white;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
 	</tr>";

}
else if (!strcmp($temp,'ACCEPTED')){
	echo "<tr style='background:green; color:white;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
 	</tr>";

}
else{
	echo "<tr style='background:yellow; color:black;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
 	<td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
 	</tr>";

}

 
}
echo "</table>";
/*
echo"<a href='exportMysqlToCsv(interview_tracker);'>Export the Table</a>";
*/

 
}/*
if(isset($_POST['delete'])){
	$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 $q = "SELECT project_id from  credentials where username='$US'";
 $ret = mysql_query($q) ;
 $val = mysql_fetch_row($ret);
 $project =$_POST['proj_id'];
 
 if($val[0]!=$project)
 {
 	echo"<script>alert('This project is not under you ')</script>";
 }
 
 	 $query= "delete * from proj_master where proj_id='$project'";
 	 $query1 = "delete * from add_member where proj_id ='$project'";
 
$retval = mysql_query($query) ;
$ret = mysql_query($query1) ;
session_destroy();
}*/
?>