<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit a news</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
		<?php
			include"db.php";
			$id=$_GET['id'];
			
			$newQuery=$connection->select("menu WHERE id=$id");
			$row=mysqli_fetch_assoc($newQuery);
			
			$author=$row['author'];
		?>
			<form action="" method="post">
				<div class="form-group">
					<input class="form-control" type="text" name="name">
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" name="submit">
				</div>
			</form>
			<?php
				if(isset($_POST['submit'])){
					$name=$_POST['name'];
					
					$newQuery=$connection->update("menu", "name=$name","id=$id");
					
					header("Location:menuList.php");
				}
			?>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>