<!DOCTYPE html>
<html>
<head>
<title>ADD ASSOCIATE </title>
	<style type="text/css">

		#container{
			padding: 20px;
		}
		body{
			font-weight: bold;
		}
		input{
			width: 220px;
			height: 35px;
			border-radius: 7px;
			border: 1px solid black;
			text-align: center;
			margin: 10px;
		}
		button{
			width: 100px;
			height: 35px;
			border-radius: 10px;
			border: 1px solid black;

		}
	</style>
	<script type="text/javascript">

		function addFields(){
			var number = document.getElementById("member").value;
			var container = document.getElementById("container");
			while (container.hasChildNodes()) {
				container.removeChild(container.lastChild);
			}
			for (i=0;i<number;i++){
				container.appendChild(document.createTextNode("Team Member : " + (i+1)+ "  "));
				var input = document.createElement("input");
				input.type = "text";

				input.required="true";
				input.name='n'+i;
				input.placeholder="enter the name";
				container.appendChild(input);
				var input1 = document.createElement("input");
				input1.type = "email";
				input1.required="true";
				input1.placeholder="enter the email id";
				input1.name='e'+i;
				container.appendChild(input1);
					var input2 = document.createElement("input");
				input2.type = "text";
				input2.required="true";
				input2.placeholder="enter the usre id";
				input2.name='u'+i;
				container.appendChild(input2);
				container.appendChild(document.createElement("br"));
				container.appendChild(document.createElement("br"));

			}
		}
	</script>
	<title></title>
</head>
<body>
	<img src="img/bosch.png"><center>
	<form action="associate_auth.php"  method="post">
	<input type="text" name="proj_id" placeholder="Enter unique project id"></input>
		
		Enter number of associates required :
		
		<input type="text" id="member" name="member" value="">&nbsp;&nbsp;&nbsp;
		<a href="#" id="filldetails" onclick="addFields()"><button>Fill Details</button></a><br><br>
		<div id="container">
		</div>
		<button >SUBMIT</button>
	</form>
</center>
</body>
</html>