<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
			<h1 style="float:left">Admin Panel</h1>
			
			<form style="float:right" action="" method="post">
				<input class="btn btn-danger" type="submit" name="logout" value="Logout">
			</form>
			<div style="clear:both"></div>
			<ul class="list-unstyled">
				<li><a class="btn btn-lg btn-primary" href="menuList.php">Edit Menu</a></li>
				<li><a class="btn btn-lg btn-info" href="list.php">Edit News</a></li>
			</ul>
		</div>
		<?php
			if(isset($_POST['logout'])){
				$_SESSION['login']=false;
				session_destroy();
				header("Location:login.php");
			}
		?>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>
