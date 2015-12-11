<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Data | Profile</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.kwicks-1.5.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
if ($(window).width() > 1024) {
    document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
}
</script>
<script>
jQuery(window).load(function () {
    $x = $(window).width();
    if ($x > 1024) {
        jQuery("#content .row").preloader();
    }
    jQuery('.magnifier').touchTouch();
    jQuery('.spinner').animate({
        'opacity': 0
    }, 1000, 'easeOutCubic', function () {
        jQuery(this).css('display', 'none')
    });
});
</script>
<!--[if lt IE 8]>
<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
<![endif]-->
</head>
<body>
<div class="spinner"></div>
<!-- header start -->
<header>
  <div class="container clearfix">
    <div class="row">
      <div class="span12">
        <div class="navbar navbar_">
          <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href=logut.php>Logout</a></li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
  <div class="container">
    <div class="row">
      <div class="span8">
        <!-- slider -->
          <ul class="slides"><br>
		<li><p> Image of band 90's </p></li>
            	<li> <img src="img/band/a.jpg" alt=""> </li>
	        <li> <img src="img/band/b.jpg" alt=""> </li>
	        <li> <img src="img/band/c.jpg" alt=""> </li>
	        <li> <img src="img/band/d.jpg" alt=""> </li>
	        <li> <img src="img/band/e.jpg" alt=""> </li>
	        <li> <img src="img/band/f.jpg" alt=""> </li>
	        <li> <img src="img/band/g.jpg" alt=""> </li>
	        <li> <img src="img/band/h.jpg" alt=""> </li>
	        <li> <img src="img/band/i.jpg" alt=""> </li>
	        <li> <img src="img/band/j.jpg" alt=""> </li>
          </ul>
        </div>
<div id="profile">
<footer>
  <div class="container clearfix">
    <ul class="list-social pull-right">
      <li><a class="icon-1" href="#"></a></li>
      <li><a class="icon-2" href="#"></a></li>
      <li><a class="icon-3" href="#"></a></li>
      <li><a class="icon-4" href="#"></a></li>
    </ul>
    </footer>
    <div class="privacy pull-left">&copy; 2015 | Demo Illustrations by Dazoel Hanzu</div>

<script src="js/bootstrap.js"></script>
</body>
</html>