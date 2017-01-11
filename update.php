<?php

include("db.php");
$uname=$_POST["uname"];
$uaddress=$_POST["uaddress"];
$udob=$_POST["udob"];
$ugender=$_POST["ugender"];
$ucontact=$_POST["ucontact"];
$uid=$_POST["uid"];
$upassword=$_POST["upassword"];


$cmd="update login set uname='$uname', uaddress='$uaddress', udob='$udob',ucontact='$ucontact',upassword='$upassword' where uid='$uid'";

if(mysql_query($cmd))
header("Location:show.php");
else
echo mysql_error();
?>


