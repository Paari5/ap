<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysql_query("select login,username,address,city,phone,email from mst_user where
login='$login'",$cn) or die(mysql_error());

echo "<h1 class=head1> View Profile </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any test</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=100>Login id<td width=100>Name: <td width=300> Address<td width=100> City<td width=100> Phone number<td width=150>Email ";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8> <td align=left> $row[0]<td align=left> $row[1]<td align=left> $row[2] <td align=left> $row[3]<td align=left> $row[4]<td align=left> $row[5] ";

}
echo "</table>";
?>

</body>
</html>
