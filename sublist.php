<?php
session_start();
include("header.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css_/sublist.css">
<link href="quiz.css" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<!-- <link rel="stylesheet" href="css_/styles.css"> -->

</head>
<body>
<?php

include("database.php");
echo "<h1>SELECT A SUBJECT</h1>";
$rs=mysqli_query($con,"select * from mst_subject");
echo "<table class='table table-light table-border-less'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td class='subjects' ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
include('footer.php');
?>
</body>
</html>
