<?php
	include('db_conn2.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `news_add` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Noutate:</label><input type="text" value="<?php echo $row['noutate']; ?>" name="noutate">
		<label>Sursa:</label><input type="text" value="<?php echo $row['sursa']; ?>" name="sursa">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>