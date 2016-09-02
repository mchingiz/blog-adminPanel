<?php
	session_start();
	unset($_SESSION["error"]);
	
	if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
		
		if(!empty($username)){
			if(!empty($password)){
				if($username=="admin"){
					if($password=="admin"){
						$_SESSION['login']=true;
						header("Location:admin.php");
					}else{
						$_SESSION['error'] = "Password is wrong";
					}
				}else{
					$_SESSION['error'] = "Username is wrong";
				}
			}else{
				$_SESSION['error'] = "Enter your password";
			}
		}else{
			$_SESSION['error'] = "Enter a username";
		}
	}else{
		unset($_SESSION["error"]);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<div class="container">
		<h1>Log in as admin</h1>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="username" placeholder="Enter your username">
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="password">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Enter">
				</div>
				<?php
					if(isset($_SESSION['error'])){ ?>
						<div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
				<?php	}
				?>
			</form>
		</div>
	</body>
</html>