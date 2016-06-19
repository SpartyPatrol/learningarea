<?php
include("connect.php");
if($_GET['id'] and $_GET['data'])
{
	$id = $_GET['id'];
$data = $_GET['data'];
$key = $_GET['key'];
if(mysql_query("update information set $key='$data' where id='$id'"))
	echo 'success';
}
?>