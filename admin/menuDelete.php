<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Delete a menu item</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
			<h1>Are you sure to delete this news?</h1>
			<form action="" method="post">
				<div class="form-group">
					<input class="btn btn-danger" type="submit" name="yes" value="Delete">
					<input class="btn btn-default" type="submit" name="no" value="Back">
				</div>
			</form>
			<?php
				include "db.php";
				
				$id=$_GET['id'];
			
				if(isset($_POST['yes'])){
					$newQuery = $connection->delete("menu","id=$id");
					header("Location:menuList.php");}
				else if(isset($_POST['no'])){
					header("Location:menuList.php");}
			?>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>