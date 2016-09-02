<?php
	session_start();
	if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List All News</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
   	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	</head>
	<body>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Text</th>
					<th>Image URL</th>
					<th>Author</th>
					<th>Click</th>
					<th>Date</th>
					<th colspan="3">Operations</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
						include "db.php";
						$newQuery=$connection->select("news");

						while( $row=mysqli_fetch_assoc($newQuery) ){
							$id=$row['id'];
							echo "<tr>";
							foreach( $row as $key => $value ){
								echo "<td>".$value."</td>";
							} ?>
							
							<td><a class="btn btn-info" href="read.php?id=<?= $id ?>">Read</a></td>
							<td><a class="btn btn-warning" href="edit.php?id=<?= $id ?>">Edit</a></td>
							<td><a class="btn btn-danger" href="delete.php?id=<?= $id ?>">Delete</a></td>
							
						<?php }
					?>
				</tr>
			</tbody>
		</table>
		<a class="btn btn-success" href="create.php">Add new news</a>
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>