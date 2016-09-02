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
			
			$newQuery=$connection->select("news WHERE id=$id");
			$row=mysqli_fetch_assoc($newQuery);
			
			$author=$row['author'];
		?>
			<form action="" method="post" enctype="multipart/form-data">
			
				<div class="form-group">
					<textarea rows="10" class="form-control" name="text"><?= $row['text'] ?></textarea></div>
				
				<div class="form-group">
					<input class="form-control" type="file" name="image"></div>
				
				<div class="form-group">
					<select class="form-control" name="author">
						<option value="Chingiz Mammadli">Chingiz Mammadli</option>
						<option value="Vuqar Namazli">Vuqar Namazli</option>
						<option value="Naseh Bedelov">Naseh Bedelov</option>
						<option value="Nigar Jafarova">Nigar Jafarova</option>
					</select></div>
					
					<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit"></div>
				
			</form>
			<?php
				if(isset($_POST['submit'])){
					$text=$_POST['text'];
					$author=$_POST['author'];
					
					$pos=strpos($text,".");
					$title=substr($text,0,$pos);
					
					$fileSource=$_FILES['image']['tmp_name'];
					$fileType=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

					$targetFile="../images/postImages/".date('dmYGis').".".$fileType; //Location to save the image
					$pathFromIndex="images/postImages/".date('dmYGis').".".$fileType; // Path to reach the image from index.php

					$newQuery=$connection->update("news", "title='$title', text='$text', image='$pathFromIndex'","id=$id");

					move_uploaded_file($fileSource,$targetFile);
					header("Location:list.php");
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