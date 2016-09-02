<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 15px;
			margin:5px;
		}
	</style>

</head>
<body>
	<form action="" method="post">
		<input type="text" name="ad" placeholder="Adiniz">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php 
	include "db.php";
	$newConnection=new Database("localhost","root","","students");

	if(isset($_POST["submit"])){
		if($newConnection->delete("students",$_POST["ad"])){
			header("Location:index.php");
		}else{
			echo "Error";
		}
	}


 ?>