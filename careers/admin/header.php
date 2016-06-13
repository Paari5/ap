<style type="text/css">
header{ height:100px;
background:#000;}
.head h2{color:#57B7FD;margin-top:10px;padding-left:7%;padding-top:20px;font-size:36px;
}
.head img{ width:70px;height:70px; }
</style>
<header>
<div class="head">

<h2 ><img src="logo.png">Apptree infotech<h2>
</div>
</header>
	<?php
	if(isset($_SESSION['alogin']))
	{
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>
