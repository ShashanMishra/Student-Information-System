<?php
include("header.php");
?><style>a{color:white; text-decoration:none}</style>
<?php
include("db.php");
$cmd="select * from login";
$rst=mysql_query($cmd);
ECHO "USER REGISTRATION";
echo "<table border=1>";
echo "<tr>";
echo "<td>u_name</td>";
echo "<td>u_id</td>";
echo "<td>u_pass1</td>";
echo "<td>u_pass2</td>";
echo "<td>gender</td>";
echo "<td>u_dob</td>";
echo "<td>u_contact</td>";
echo "</tr>";
while($row=mysql_fetch_array($rst))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td style='background-color:rgba(199,80,80,1)'><a href='del.php?uid=$row[5]'><img src=d.png></a></td>";
echo "<td style='background-color:rgba(199,80,80,1)'><a href='edit.php?uid=$row[5]'>Edit</a></td>";
echo "</tr>";
}
echo "</table>";
?>