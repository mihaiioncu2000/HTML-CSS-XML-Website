<?php
	include('db_conn1.php');
 
	$name=$_POST['name'];
	$rezultat=$_POST['rezultat'];
 
	mysqli_query($conn,"insert into `rezultate` (name,rezultat) values ('$name','$rezultat')");
	header('location:rezultate.php');
 
?>