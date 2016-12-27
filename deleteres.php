<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from customer where transactionum='$id'";
 mysql_query("delete from customer where id='$id'");
 mysql_query( $sql);
}

?>