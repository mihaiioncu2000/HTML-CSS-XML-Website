<?php
	include('db_conn2.php');
 
	$noutate=$_POST['noutate'];
	$sursa=$_POST['sursa'];
 
	mysqli_query($conn,"insert into `news_add` (noutate,sursa) values ('$noutate','$sursa')");
	header('location:noutati.php');
 
?>