<?php 
include "db.php";

$newConnection=new Database("localhost","root","","students");
$newQuery=$newConnection->select("students");
while($row=mysqli_fetch_assoc($newQuery)){
	echo $row["name"]." -". $row["surname"]."<br>";
}

 ?>