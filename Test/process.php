<?php
include("connect.php");

if( $_POST['id'] and $_POST['data'] and $_POST['key']) {
	$id=$_POST['id'];
	$data=$_POST['data'];
	$key= $_POST['key']; 
	if(mysql_query("update c9.information set $key='$data' where id='$id'")) {
		echo 'success';
	}
}


if($_GET['id'] and $_GET['data'])
{
	$id = $_GET['id'];
	$data = $_GET['data'];
	$key = $_GET['key'];
	if(mysql_query("update c9.information set $key='$data' where id='$id'"))
	echo 'success';
} 



?>