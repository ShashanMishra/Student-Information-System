<?php

if(!($con=mysql_connect("localhost","targetco_user","allahabad")))
	echo "can't select database";
if(!$db=mysql_select_db("targetco_db"))
	echo "can't select database";

?>
