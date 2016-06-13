<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AppTree infotech Puducherry</title>
  <meta name="description" content="Apptree infotech puducherry">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Include Bootstrap Min Css -->
 
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">
  <!-- bxSlider CSS file -->
  <link href="../assets/css/jquery.bxslider.css" rel="stylesheet" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="../assets/css/responsive.min.css">
  <!-- Include Modernizer Js -->
  <script src="../assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>  
<body>  
  <header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="Site Logo"></a><span class="title">AppTree Infotech</span>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../index.html">Home</a></li>
          <li><a href="../service.html">Services</a></li>
          <li><a href="../about.html">About Us</a></li>
          <li><a href="careers/index.php">Careers</a></li>
          <li><a href="../contact.html">Contact us</a></li>
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>
  <br>
  <br>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><br/><strong><a href=\"index.php\"> Home </a>|<a href=\"view.php\"> View profile </a>|<a href=\"signout.php\">Signout</a></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";
	 }
	?>
	
  </body>
  </html>