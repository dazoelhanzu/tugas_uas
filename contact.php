<!DOCTYPE html>
<html lang="en">
<head>
<title>Codester | Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.cookie.js"></script>
<script>
jQuery(window).load(function () {
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
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.png"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="biodata.php">Biodata</a></li>
                <li><a href="view.php">View Data</a></li>
                
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
  <!-- content -->
  <div id="content">
    <div class="ic"></div>
    <div class="container">
      <div class="row">
        <article class="span8">
          <h3>Contact us</h3>
          <div class="inner-1">
            <form id="contact-form" action="#">
              <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
              <fieldset>
                <div>
                  <label class="name">
                    <input type="text" value="Your name">
                    <br>
                    <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="phone">
                    <input type="tel" value="Telephone">
                    <br>
                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="email">
                    <input type="email" value="Email">
                    <br>
                    <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="message">
                    <textarea>Message</textarea>
                    <br>
                    <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset">Clear</a> <a class="btn btn-1" data-type="submit">Send</a></div>
              </fieldset>
            </form>
          </div>
        </article>
        <article class="span4">
          <h3>Contact info</h3>
          <div class="map"> <a href="#"><img src="img/map.jpg" alt=""></a> </div>
          <address class="address-1">
          <strong>Maleber,<br>
          Bojonghuni, Road,<br>
          Ciamis, 46214.</strong>
          <div class="overflow"> <span>Mobile:</span>+6285223364494<br>
            <span>E-mail:</span> <a href="#" class="mail-1">dazul75@gmail.com</a><br>
	<span></span> <a href="#" class="mail-1">iqbalaprilianto@gmail.com</a><br>				
            <span>Twitter:</span> <a href="#" class="mail-1">@Dazoelhanz</a></div>
	<span></span> <a href="#" class="mail-1">@_iqbaliqbal</a></div>
          </address>
        </article>
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
    <div class="privacy pull-left">&copy; 2013 | Demo Illustrations by Dazoel Hanzu</a></div>
  </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>