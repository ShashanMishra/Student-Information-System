<?php
session_start();
include("header.php");
if(isset($_GET["var"]))
{
setcookie("userid","",time()-3600);
setcookie("userpic","",time()-3600);
setcookie("username","",time()-3600);
}
else
{
if(isset($_COOKIE["userid"]))
{
	$_SESSION["userid"]=$_COOKIE["userid"];
	$_SESSION["username"]=$_COOKIE["username"];
	$_SESSION["userpic"]=$_COOKIE["userpic"];
	header("Location:members/home.php");
}
}
?>
<style>
table{width:400px;border:2px solid #aaaaaa; border-radius:20px;text-align:center}
input{height:50px;width:250px}
input[type=checkbox]{height:20px;width:100px}
</style>
<center>
<form method=post action=check.php>
<table>
<tr><td><input type=text name="uid" required placeholder="ENTER USER ID"></td></tr>
<tr><td><input type=password name="upassword" required  placeholder="ENTER USER PASSWORD"></td></tr>

<tr><td><input type=checkbox name="rem">Keep me Logged In</td></tr>


<tr><td><input type=submit value="LOGIN"></td></tr>
</table>
</form>

<?php
if(isset($_GET["reason"]))
{
echo "<font color=red size=3> Sorry ! Invalid Id or Password </font>";
}

?>
	

</center>