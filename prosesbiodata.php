<?php
	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.
	}

	if (empty($_POST['user'])) {
	$errors[] = 'You forgot to enter your userid.';
	} else {
	$u = trim($_POST['user']);
	}

	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$n = trim($_POST['nama']);
	}

	if (empty($_POST['alamat'])) {
	$errors[] = 'You forgot to enter.';
	} else {
	$a = trim($_POST['alamat']);
	}

	if (empty($_POST['jenis_kelamin'])) {
	$errors[] = 'You forgot to enter.';
	} else {
	$j = trim($_POST['jenis_kelamin']);
	}

	if (empty($_POST['umur'])) {
	$errors[] = 'You forgot to enter.';
	} else {
	$um = trim($_POST['umur']);
	}

	if (empty($_POST['agama'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$ag = trim($_POST['agama']);
	}

	// Check for a tempat lahir:
	if (empty($_POST['tempat_lahir'])) {
	$errors[] = 'You forgot to enter.';
	} else {
	$t = trim($_POST['tempat_lahir']);
	}

	if (empty($_POST['password'])) {
	$errors[] = 'You forgot to enter.';
	} else {
	$p = trim($_POST['password']);
	}	
	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	mysql_select_db("daftar", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO daftar.user(user,". "nama,alamat,jenis_kelamin,umur,agama,tempat_lahir,password)".
	"VALUES ('$u','$n','$a','$j','$um','$ag','$t','$p')");
	$r = mysql_query ("SELECT * FROM user"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p>Alhamdulilah anda telah terdaftar !</p><p><br /></p>
	<p>Untuk selanjutnya silahkan pilih <a href="view.php">view data</a> untuk melihat data anda !</p><p><br/></p>';
	} else { // If it did not run OK.

	// Public message:
	echo '<h1>System Error</h1>
	<p class="error">You could not be registered due to a system error. '.
	'We apologize for any inconvenience.</p>';

	// Debugging message:
	//echo '<p>' mysql_error($Koneksi);
	} // End of if ($r) IF.
	mysql_close($Koneksi); // Close the database connection.
	exit();
	}else{
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	}
	foreach ($errors as $msg) { // Print each error.
	echo " - $msg<br />\n";
	}
	echo "</p><p>Please try again.</p><p><br/></p>";
?>