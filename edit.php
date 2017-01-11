<?php
include("header.php");
?><style>a{color:white}</style>
<?php
include("db.php");
$uid=$_GET["uid"];

$cmd="select * from login where uid='$uid'";
$rst=mysql_query($cmd);
echo "<table width=600 cellpadding=0 cellspacing=0 border=1>";
while($row=mysql_fetch_array($rst))
{
echo "<form method=post action=update.php>";
echo "<tr><td><input type=text value='$row[0]' name=uname></td></tr>";
echo "<tr><td><input type=text value='$row[1]' name=uaddress></td></tr>";
echo "<tr><td><input type=DATE value='$row[2]' name=udob></td></tr>";
echo "<tr><td><input type=text value='$row[3]' name=ugender></td></tr>";
echo "<tr><td><input type=text value='$row[4]' name=ucontact></td></tr>";
echo "<tr><td><input type=text value='$row[5]' name=uid READONLY></td></tr>";
echo "<tr><td><input type=Password value='$row[6]' name=upassword></td></tr>";
echo "<tr><td><input type=submit value=UPDATE></td></tr>";
echo "</form>";

}
echo "</table>";
?>








