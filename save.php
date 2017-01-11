<?php
session_start();
if($_SESSION["cap"]!=$_POST["cap"])
{
header("Location:form.php?reason=invalid captcha");
}

if($_FILES["upic"]["type"]=="image/jpeg")
{
$name=$_POST["username"];
$address=$_POST["address"];
$dob=$_POST["dob"];
$gender=$_POST["sex"];
$contact=$_POST["contact"];
$uid=$_POST["uid"];
$upass=sha1($_POST["upass"]);
$tn=$_FILES["upic"]["tmp_name"];
$an=uniqid().$_FILES["upic"]["name"];


include("db.php");
$cmd="insert into login value('$name','$address','$dob','$gender','$contact','$uid','$upass','$an')";
if(mysql_query($cmd))
{
	move_uploaded_file($tn,$an);
	echo "record has been updated";


}

else 
	echo mysql_error();
}
else
{
	echo "Dont try to upload invalid file format";

}
?>