<?php
	$id=$_GET['id'];
	include('db_conn1.php');
	mysqli_query($conn,"delete from `rezultate` where userid='$id'");
	header('location:rezultate.php');
?>