<?php
	include('db_conn2.php');
	$id=$_GET['id'];
 
	$noutate=$_POST['noutate'];
	$sursa=$_POST['sursa'];
 
	mysqli_query($conn,"update `news_add` set noutate='$noutate', sursa='$sursa' where userid='$id'");
	header('location:noutati.php');
?>