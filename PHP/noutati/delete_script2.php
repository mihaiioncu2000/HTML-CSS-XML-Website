<?php
	$id=$_GET['id'];
	include('db_conn2.php');
	mysqli_query($conn,"delete from `news_add` where userid='$id'");
	header('location:noutati.php');
?>