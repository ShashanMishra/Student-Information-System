<?php
session_start();
if(!(isset($_SESSION["userid"])))
{
header("Location:../login.php");
}

?>
<style>
*{margin:0px}
#nav{background-color:#002255;width:100%;height:50px}
#nav a:link{color:white;text-decoration:none;margin-left:20px}
#nav a:visited{color:white;text-decoration:none;margin-left:20px}
</style>
<div id=nav>
<A href=home.php> Home Page </a>
<A href=shareNotes.php> Share Notes </a>
<A href=shareCode.php> Share Code </a>
<A href=profile.php>Profile </a>
<A href=message.php> Message</a>
<A href=discussion.php>Discussion</a>
<A href=logout.php>Log Out </a>
&nbsp;&nbsp;&nbsp;&nbsp;
<font color=yellow>Welcome <?php echo $_SESSION["userid"]?></font>
<br>
<font color=yellow>Welcome <?php echo $_SESSION["username"]?></font>
<img src=../<?php echo $_SESSION["userpic"];?> width=70 height=70>
</div>