<?php
	include('connection.php');
 
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
 
	mysqli_query($connection,"insert into `user` (firstname,email) values ('$firstname','$email')");
	header('location:participanti.php');
 
?>