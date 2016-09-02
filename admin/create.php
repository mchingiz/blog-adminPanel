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
			<form action="" method="post" enctype="multipart/form-data">
			
				<div class="form-group">
					<textarea rows="10" class="form-control" name="text" placeholder="Write your text here"></textarea></div>
				
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
				include"db.php";
				
				if(isset($_POST['submit'])){
					$text=$_POST['text'];
					
					$pos=strpos($text,".");
					$title=substr($text,0,$pos);
					
					$author=$_POST['author'];
					
					$date=date('d-m-Y');
					
					$fileSource=$_FILES['image']['tmp_name'];
					$fileType=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

					$targetFile="../images/postImages/".date('dmYGis').".".$fileType; //Location to save the image
					$pathFromIndex="images/postImages/".date('dmYGis').".".$fileType; // Path to reach the image from index.php
					
					
					$newQuery=$connection->insert("news","title,text,image,author,date","'$title','$text','$pathFromIndex','$author','$date'");

					move_uploaded_file($fileSource,$targetFile);
					header("Location:../index.php");
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