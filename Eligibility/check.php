<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>To Check</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<br><br><br><br><br><br><br>
	<div align="center">
		<?php

			function eligible(){
				echo "Hurray, Your are Eligible";
			}
			function not_eligible(){
				echo "Alas, You are not Eligible";
			}
			function fail_physics(){
				echo "Failed in Physics";
			}
			function fail_chemistry(){
				echo "Failed in Chemistry";
			}
			function fail_biology(){
				echo "Failed in Biology";
			}


			if(isset($_POST['submit']))
			{
				$physics=$_POST['physics'];
				$chemistry=$_POST['chemistry'];
				$biology=$_POST['biology'];
				$minority=$_POST['minority'];
			}

			if($physics>35 and $chemistry>35 and $biology>35){
				if($minority="no"){
					if($physics+$chemistry+$biology>=150)
						eligible();
					else
						not_eligible();
				}
				elseif($minority="yes"){
					if($physics+$chemistry+$biology>=120)
						eligible();
					else
						not_eligible();
				}
			}
			elseif ($physics<35) {
				fail_physics();
			}
			elseif ($chemistry<35) {
				fail_chemistry();
			}
			elseif ($biology<35) {
				fail_biology();
			}
			else
				echo "Error, Please try again properly";
		?>
		<br><br><br><br>
		<div><button class="btn btn-default"><a href="index.html">Back to Home</a></button></div>
	</div>
</body>
</html>