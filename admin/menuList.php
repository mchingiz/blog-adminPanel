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
	
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Link</th>
					<th colspan="2">Operations</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php
						include "db.php";
						$newQuery=$connection->select("menu");

						while( $row=mysqli_fetch_assoc($newQuery) ){
							$id=$row['id'];
							echo "<tr>";
							foreach( $row as $key => $value ){
								echo "<td>".$value."</td>";
							} ?>
							
							<td><a class="btn btn-warning" href="menuEdit.php?id=<?= $id ?>">Edit</a></td>
							<td><a class="btn btn-danger" href="menuDelete.php?id=<?= $id ?>">Delete</a></td>
							
						<?php }
					?>
				</tr>
			</tbody>
		</table>
		<a class="btn btn-success" href="newMenuItem.php">Add new menu item</a>
	
	</body>
</html>
<?php
	}else{
		header("Location:login.php");
	}
?>