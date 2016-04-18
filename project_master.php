<?php 

error_reporting(0);
echo "<!DOCTYPE html>
<html>
<head>
	<title>PROJECT MASTER</title>
	<style type='text/css'>
	h1{
		margin-top:-30px;
	}
	input{
		width: 15%;
		height: 30px;
		text-align: center;
		border: 1px solid black;
		border-radius: 7px;
		margin-left: 20px;
	}
	button{
			width: 100px;
			height: 35px;
			border-radius: 10px;
			border: 1px solid black;

		}
		body{
			margin-top:30px;
		}
		img{
			position: absolute;
		}
		form{
			padding-top: 100px;
		}
		p{
			padding-left: 100px;
		}
	</style>
</head>
<body>
<img src='img/bosch.png'>
<center>
	<form action='proj_master_back.php' method='post'>
<h1 >Enter the project Details </h1>
<hr>
The Project ID assigned is : ";


$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);
 $query = 'SELECT MAX(proj_id) from proj_master';
 $res = mysql_query($query);
 $row = mysql_fetch_row($res);
 $row = intval($row[0]);
 $row=$row+1;

 
 echo "<b> $row</b>";

 echo "
<br><br>
Enter your Name 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input></input>
<br><br>Enter your User ID 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;<input type='text' name='userid'></input><br><br>
Type of the project :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='type' placeholder='enter the project type 'required>
	

</input>
<br><br>
Enter the starting date for the project
<input type='date' name='start_date' required></input>
<br><br>
Enter the deadline for the project&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<input type='date'  name='end_date' required></input>
<br><br>
Enter the project Description
<br>
<textarea rows='15' cols='120' id='aboutDescription' name='proj_desc'
            style='resize: none;  height: 150px;
  max-height: 150px;  ' required></textarea>
<br><br>
<button type='submit'>SUBMIT</button>
</form>
</center>

</body>
</html>";

?>