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
		<input type="text" name="soyad" placeholder="Soyadiniz">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php 
	include "db.php";
	$newConnection=new Database("localhost","root","","students");

	if(isset($_POST["submit"])){
		if($newConnection->insert("students",$_POST["ad"],$_POST["soyad"])){
			header("Location:index.php");
		}else{
			echo "Error";
		}
	}


 ?>