<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("formdb", $con);

$sql="INSERT INTO MARRIAGES (state,district,mandal,city,day,month,year,name,ph_num)
VALUES('$_POST[dstate]','$_POST[adistricts]','$_POST[mname]','$_POST[cname]','$_POST[sday]','$_POST[smnth]','$_POST[syear]','$_POST[yname]','$_POST[ph]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<br>";

mysql_close($con);
?>
<html>
<head>
<style type="text/css">
body
{
background-color:#FFFFCC;
margin-left:auto;
width:1280px;
margin-right:auto;
}
div.fnt
{
font-family:"Andalus";
color:	#000000;
position:fixed;
font-size:20px;
margin-left:30;
margin-top:20;
}
</style>
</head>
<body>
<form action="index.php" method="post">
<div class="fnt">
Your Data was Successfully submitted.<br> 
We will get back to You with in a Few Hours through a call.
<br>
Thank You For Showing Your interest.
<br>
Click this Button to go to Home Page.
<input type="submit" value="Home">
</div>
</form>
</body>
</html>
