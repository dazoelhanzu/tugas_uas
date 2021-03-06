<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Data | Biodata</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
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
<!-- header -->
<header>
  <div class="container clearfix">
    <div class="row">
      <div class="span12">
        <div class="navbar navbar_">
          <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="biodata.php">Biodata</a></li>
                <li><a href="view.php">View Data</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
  <!-- Content -->
  <div id="content">
    <div class="ic"></div>
    <div class="container">
      <div class="row">
        <article class="span12">
          <h4>Harap isi Biodata</h4><br>
        </article>
        <div class="clear"></div>
       <form action="prosesbiodata.php" method="post">
<fieldset>
	<p><label>User ID: <input type="integer" name="user" size="4" maxlength="8" value="<?php if (isset($_POST['user'])) echo $_POST['user']; ?>"></p></label>
	<p><label>Name: <input type="text" name="nama" size="20" maxlength="40"value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>"></p></label>
	<p><label>Alamat: <input type="text" name="alamat" size="40" maxlength="40"value="<?php if (isset($_POST['alamat'])) echo $_POST['alamat']; ?>" ></p></label>
	<p><label>Jenis Kelamin: <input type="text" name="jenis_kelamin" size="5" maxlength="8"value="<?php if (isset($_POST['jenis_kelamin'])) echo $_POST['jenis_kelamin']; ?>"></p></label>
	<p><label>Umur : <input type="integer" name="umur" size="2" maxlength="3" value="<?php if (isset($_POST['umur'])) echo $_POST['umur']; ?>" ></p></label>
	<p><label>Agama : <input type="text" name="agama" size="2" maxlength="10"value="<?php if (isset($_POST['agama'])) echo $_POST['agama']; ?>"></p></label>
	<p><label>Tempat lahir: <input type="text" name="tempat_lahir" size="20" maxlength="10"value="<?php if (isset($_POST['tempat_lahir'])) echo $_POST['tempat_lahir']; ?>"></p></label>
	<p><label>Password: <input type="password" name="password"value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"></p></label>
</fieldset>
	<p align="center"><input type="submit" name="submit" value="sign up"/></p>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<footer>
  <div class="container clearfix">
    <ul class="list-social pull-right">
      <li><a class="icon-1" href="#"></a></li>
      <li><a class="icon-2" href="#"></a></li>
      <li><a class="icon-3" href="#"></a></li>
      <li><a class="icon-4" href="#"></a></li>
    </ul>
    <div class="privacy pull-left">&copy; 2015 | Demo Illustrations by Dazoel Hanzu</div>
  </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>