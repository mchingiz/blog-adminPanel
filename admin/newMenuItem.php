<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List All Menu Items</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
	
		<div class="container">
			<form action="" method="post">
				<div class="form-group col-md-3">
					<input class="form-control" type="text" name="name" placeholder="Write the name here">
					<input class="btn btn-success" type="submit" name="submit" value="Add">
				</div>
			</form>
		</div>
		<?php
			if(isset($_POST['submit'])){
				include "db.php";
				
				$name=$_POST['name'];
				$url=$name.".php";
				$newQuery=$connection->insert("menu","name,link","'$name','$url'");
			}
		?>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>