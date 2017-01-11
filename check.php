<?php
session_start();
include("db.php");

$uid=$_POST["uid"];
$upassword=sha1($_POST["upassword"]);

$cmd="select * from login where uid='$uid' and upassword='$upassword'";
$rst=mysql_query($cmd);
$row=mysql_fetch_array($rst);
if($row==0)
{
	header("Location:login.php?reason=invalid");
}
else
{
	if(isset($_POST["rem"]))
	{
		setcookie("userid",$row[5],time()+(3600*24));
		setcookie("userpic",$row[7],time()+(3600*24));
		setcookie("username",$row[0],time()+(3600*24));
	

	}
	$_SESSION["userid"]=$row[5];
	$_SESSION["userpic"]=$row[7];
	$_SESSION["username"]=$row[0];
//	$_SESSION["userid"]=$uid;
	header("Location:members/home.php");
}
?>
	
