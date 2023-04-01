<?php
	include('db_conn1.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `rezultate` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update_script.php?id=<?php echo $id; ?>">
		<label>Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>Rezultat:</label><input type="text" value="<?php echo $row['rezultat']; ?>" name="rezultat">
		<input type="submit" name="submit">
		<a href="rezultate.php">Back</a>
	</form>
</body>
</html>