<?php 
$server = 'localhost';
 $user = 'root';
 $pass = 'root';
 $db = 'db_scb';
 
 $conn = mysql_connect($server, $user, $pass) ;
 mysql_select_db($db);


echo "<!DOCTYPE html>
<html>
<head>
	<title>Project table</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<script type='text/javascript' src='js/bootstrap.min.js'></script>
	<style type='text/css'>
	img{
		margin-top: 12px;
		margin-left: 12px;
	height: auto;
	}
	#wrap{
	
		border: 2px solid red;
	
		height: auto;
		border-top-right-radius: 0px;
		border-bottom-right-radius: 0px;
		padding: 50px;
		padding-top: 10px;
		border-right: hidden;
		border-left: hidden;
		font-weight: bold;
	}
	hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 2px solid black;
    margin: 1em 0;
    padding: 0; 
}
	span{
		float: right;
	}
	#choice{
		text-align: center;
		
	}
	button{
		width: 250px;
		outline: none;
		border: 0px;
		border-radius: 7px;
		background: black;
		height: 45px;
		color: white;
		font-weight: bold;
	}
	#comment{
width: 50%;
height: 100px;
	}
	</style>
</head>
<body>
<img src='img/bosch.png'>

<br>
<div id='wrap' class='container'>
<hr>
<p>&nbsp;&nbsp; PROJECT ID :
";
session_start(1);

$US = $_SESSION['USER_NAME'];
if(!isset($_SESSION['USER_NAME']))
{
echo("<script>window.location = 'http://localhost/part-2/index.html';</script>");
}
session_destroy();

$query="SELECT proj_id  FROM  add_member WHERE user_id='$US'";

$retval = mysql_query( $query, $conn );
$proj= mysql_fetch_row($retval);
$proj_id = $proj[0];
$query="SELECT *  FROM  proj_master WHERE proj_id='$proj_id'";

$retval = mysql_query( $query, $conn );

while($row = mysql_fetch_array($retval))
{
$proj_id=$row['proj_id'];
$proj_desc=$row['proj_desc'];
$proj_sd = $row['proj_start_date'];
$proj_ed = $row['proj_end_date'];

}
echo"$proj_id

<span>Project End Date : $proj_ed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span>Project start Date : $proj_sd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</p><hr>
<form action='proj_sheet_back.php' method='post'>
<p>PROJECT DETAILS<br> $proj_desc</p>
<br><br>
<div id='choice'>
<button style='background: #2ecc71;'  type='submit' name='accept'>ACCEPT</button>
<br><br>
<button style='background: #c0392b;' type='submit' name='reject' >REJECT</button>
</div>
<br>
<hr>
<p> Please enter your comment in the following box </p>
<textarea rows='15' cols='120' name='comment'
                    style='resize: none;  height: 150px;
  max-height: 150px;  ' required></textarea>
  </form>
</div><br><br>
</body>
</html>";

?>