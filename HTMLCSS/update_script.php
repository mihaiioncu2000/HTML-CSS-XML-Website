<?php
	include('db_conn1.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$rezultat=$_POST['rezultat'];
 
	mysqli_query($conn,"update `rezultate` set name='$name', rezultat='$rezultat' where userid='$id'");
	header('location:rezultate.php');
?>