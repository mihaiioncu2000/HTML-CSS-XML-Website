<?php
	include('connection.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
 
	mysqli_query($connection,"update `user` set firstname='$firstname', email='$email' where userid='$id'");
	header('location:participanti.php');
?>