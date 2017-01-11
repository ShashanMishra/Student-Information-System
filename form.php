<?php

include("header.php");
?>
<center>
<h2>REGISTRATION FROM</h2>
	<form method="POST" action="save.php" enctype="multipart/form-data">
	<table style="border:1px solid gray">
	<tr>
 <td>NAME     :</td><td><input type=text name="username" placeholder="USER NAME" required></td>
</tr>
	<tr>
 <td>
ADDRESS  :
</td>
<td>
<textarea name="address" cols="10" rows="3" placeholder="ENTER ADDRESS" required></textarea><br>
</td></tr>
<tr>
<td>
DOB      :</td><td><input type=date name="dob" placeholder="USER DOB" required></td></tr>
<tr>
<td>GENDER   : </td><td><input type="radio" name="sex" value="male" checked>Male     <input type="radio" name="sex" value="female">Female   </td></tr>
<tr>
<td>
CONTACT   :</td><td><input type=number name="contact" placeholder="ENTER MOBILE NO." required></td></tr>

<tr><td>E-mail   :</td><td><input type=text name="uid" placeholder="ENTER MAIL ID" required></td></tr>

<tr><td> PASSWORD :</td><td><input type=password name="upass" placeholder="ENTER 			PASSWORD" required> </td></tr>

<tr><td>Select Image:</td><td><input type=file name="upic" required> </td></tr>

<tr><td>Enter Code<td><img src=cap.php><input type=text name="cap" required> </td></tr>
<tr><td colspan=2 align=center><input type=submit value="SUBMIT">     </td></tr>
</table>
<br><br><br>
</form>
</center>
