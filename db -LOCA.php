<?php

if(!($con=mysql_connect("localhost","root","")))
	echo "can't select database";
if(!$db=mysql_select_db("apple"))
	echo "can't select database";

?>
