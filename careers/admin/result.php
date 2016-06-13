<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Apptree infotech </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("../database.php");
extract($_SESSION);
$rs=mysql_query("select u.user_id,u.username,u.address,u.phone,u.email,u.city,u.cv,u.login from mst_user u",$cn) or die(mysql_error());

echo "<h1 class=head1> Result </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td>User_ID <td> Username<td width=300>Address <td> Phone number<td>Email<td> City<td>CV<td> View mark's</td>";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1]<td align=center> $row[2]<td align=center> $row[3]<td align=center> $row[4]<td align=center> $row[5]<td align=center> ";
echo "<a href='cv.php?user_id=$row[0]'>$row[6]</a>";
echo "<td align=center><a href='mark.php?login=$row[7]'>click</a>";

}
echo "</table>";
?>

</body>
</html>
