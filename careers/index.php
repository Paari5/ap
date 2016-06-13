<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Apptree infotech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/test.png" width="250" height="250" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">&nbsp;&nbsp;Take online Test </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/result.png" width="250" height="250" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">&nbsp;&nbsp;Result </a></td>
  </tr>
</table>';
   
   exit;
		

}


?>
<div id="page-wrap">
<br/>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#03A9F4"><span class="style6"></span></td>
    <td width="23%" style="padding:10px 10px 30px 10px;" bgcolor="#03A9F4"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Wel come to Online test</h1>
      <!--slider start -->
       <div class="container11">
		
			<div id="da-slider" style="" class="da-slider">
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>WelCome to Online 
            exam. This Site will provide the test for various subject of interest. 
            You need to login for the take the online exam and get starts with US on our's careers</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="images/2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="images/3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Warm welcome</h2>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="images/1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="images/4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
		</script>	
	  
	  <!--slider end -->
	  
	<!--  
	  <p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="center" class="style5"><span class="style7">WelCome to Online 
            exam. This Site will provide the test for various subject of interest. 
            You need to login for the take the online exam and get starts with US on our's careers.</span></p>
      </blockquote>
	  -->
    </div>
	<div>
	</td>
    <td  valign="top" style="padding:30px 10px 30px 10px;"><form name="form1" method="post" action="">
      <table width="auto" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center style="padding:10px 10px 30px 10px;" class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#F4CF69"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5" ><img src="../images/logo.png" width="254" height="350"><b style="font-size:24px;color:#EF483C">AppTree infotech  </b></p>
        </div>
    </form></td>
  </tr>
</table>
</div>
</body>
</html>
