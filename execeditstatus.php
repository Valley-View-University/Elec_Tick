<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE customer SET status='$status' WHERE id='$roomid'");
	header("location: dashboard.php");
?>