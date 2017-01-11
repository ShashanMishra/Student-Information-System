<?php

	include("db.php");
	$uid=$_GET["uid"];

	$cmd="delete from login where uid='$uid'";

	if(mysql_query($cmd))
	{
	header("Location:show.php");
	}
	else
	{
		echo mysql_error();
	}
?>
	
