<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Data | View Data</title>
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
    jQuery(".list-blog li:last-child").addClass("last");
    jQuery(".list li:last-child").addClass("last");
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
<!--  header  -->
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
                <li><a href="biodata.php">Biodata</a></li>
                <li class="active"><a href="view.php">View Data</a></li>
           
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
  <div class="red">
 


<?php

// This script retrieves all the records from the users table. 
// This new version links to edit and delete pages.
require('mysqli_connect.php');

// Define the query:
$q = " SELECT user, nama, agama, jenis_kelamin, umur, tempat_lahir, alamat, password AS dr, user
FROM user
ORDER BY user ASC 
LIMIT 0 , 30 ";
$r = @mysqli_query ($dbc, $q);
// Count the number of returned rows:
$num = mysqli_num_rows($r);
if ($num > 0) { // If it ran OK, display the records.
// Print how many users there are:
echo "<p> There are currently $num registered users.</p>\n";
// Table header:
echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
<tr>
<td align="left"><b>Edit</b></td>
<td align="left"><b>Delete</b></td>
<td align="left"><b>User ID</b></td>
<td align="left"><b>Nama</b></td>
<td align="left"><b>Jenis Kelamin</b></td>
<td align="left"><b>Umur</b></td>
<td align="left"><b>Agama</b></td>
<td align="left"><b>Tempat Lahir</b></td>
<td align="left"><b>Alamat</b></td>
<td align="left"><b>Password</b></td>
</tr>';

// Fetch and print all the records:
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))	{
	echo'<tr>
		<td align="left"><a href="edituser.php?id=' . $row['user'].
		' ">Edit</a></td>
		<td align="left"><a href="deleteuser.php?id=' . $row['user'].
		'">Delete</a></td>
    <td align ="left">' . $row['user'] . '</td>
		<td align ="left">' . $row['nama'] . '</td>
		<td align ="left">' . $row['jenis_kelamin'] . '</td>
    <td align ="left">' . $row['umur'] . '</td>
    <td align ="left">' . $row['agama'] . '</td>
		<td align ="left">' . $row['tempat_lahir'] . '</td>
    <td align ="left">' . $row['alamat'] . '</td>
		<td align ="left">' . $row['dr'] . '</td>
		</tr>
		';
	}
	echo '</table>';
	 mysqli_free_result ($r);
	} else { // If no records were returned. 
		echo '<p class="error">There are currently no registered users.</p>';
	}
mysqli_close($dbc);

?>
    </ul>
	<p>Apabila anda ingin keluar pilih <a href=logut.php>Logout</a></p><br>
        <div class="privacy pull-left">&copy; 2013 | Demo Illustrations by Dazoel Hanzu</a></div>
  </div>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>