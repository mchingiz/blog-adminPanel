<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit a menu item</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
		<h1>Edit Menu Item</h1>
		<?php
			include"db.php";
			$id=$_GET['id'];
			
			$newQuery=$connection->select("menu WHERE id=$id");
			$row=mysqli_fetch_assoc($newQuery);
		?>
			<form action="" method="post">
				<div class="form-group col-md-3" style="padding:0;">
					<input class="form-control" type="text" name="name" value="<?= $row['name'] ?>">
				</div>
				<div class="form-group">
					<input class="btn btn-warning" type="submit" name="submit" style="margin-left:20px;">
				</div>
			</form>
			<?php
				if(isset($_POST['submit'])){
					$name=$_POST['name'];
					$url=$name.".php";
					
					$newQuery=$connection->update("menu", "name='$name', link='$url'","id=$id");
					
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