<?php
  include("gmail.php");
?>
<!DOCTYPE html>
<html>
<head>
<title >TMO</title>
</head>
<body>
<style>
body {
  background-image: url("clock_2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<marquee direction="left" width="100%" height="100%" scrollamount="10"><font size="6" face="Impact" color="#000000">Welcome to Time Manage Online</font></marquee>

<br>
<br>
<br>
<br>
<br>


<center><table width="42%" style="border:3px dashed #123654;" cellspacing="5" bgcolor=" #123654" cellpadding="5"><tr><td style="border:3px dashed white;" bgcolor="white"><font size="10" face="Georgia" color="#000000"><center>Time Manage Online</center></font></td></tr></table></center>

<br>
<br>
<br>


<center><MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE><font size="4" face="Calibri" color="#000000">โปรดพิมพ์ข้อความลงด้านล่าง</font><MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE></center>



<center><form method="post">
<br>
<textarea rows="2" cols="8" style="border:3px dashed #FFFFFF;"  name="subject" placeholder="Subject" required></textarea><br>
<textarea rows="5" cols="50" style="border:3px dashed #FFFFFF;"  name="idComment" placeholder="Comment" required></textarea><br>

<br>
<input type="submit" name="commentBtn">
</form></center>
<?php
if(isset($_POST["commentBtn"])){
  email($_POST["subject"],$_POST["idComment"]);
}
?>

</body>
</html> 