<?php 
	include 'classes/db.Select.Class.php';
	$pk=$_GET[id];
	$cli= new Client ;
	$listcli= $cli->DeleteClient($pk);
header("location: index.php");
?>