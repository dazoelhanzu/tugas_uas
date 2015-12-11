<?php 
// This page is for editing a user record.
// This page is accessed through view_users.php.
echo '<h1>Edit a User</h1>';
// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view.php
$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
$id = $_POST['id'];
} else { // No valid ID, kill the script.
echo '<p class="error">This page has been accessed in error.</p>';
exit(); 
}
require ('mysqli_connect.php'); 
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$errors = array();
if (empty($_POST['user'])) {
	$errors[] = 'You forgot to enter your userid.';
	} else {
	$u = mysqli_real_escape_string($dbc, trim($_POST['user']));
	}

	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your name.';
	} else {
	$n = mysqli_real_escape_string($dbc, trim($_POST['nama']));
	}

	if (empty($_POST['alamat'])) {
	$errors[] = 'You forgot to enter alamat.';
	} else {
	$a = mysqli_real_escape_string($dbc, trim($_POST['alamat']));
	}

	if (empty($_POST['jenis_kelamin'])) {
	$errors[] = 'You forgot to enter jenis_kelamin.';
	} else {
	$j = mysqli_real_escape_string($dbc, trim($_POST['jenis_kelamin']));
	}

	if (empty($_POST['umur'])) {
	$errors[] = 'You forgot to enter umur.';
	} else {
	$um = mysqli_real_escape_string($dbc, trim($_POST['umur']));
	}

	if (empty($_POST['agama'])) {
	$errors[] = 'You forgot to enter agama.';
	} else {
	$ag = mysqli_real_escape_string($dbc, trim($_POST['agama']));
	}

	// Check for a tempat lahir:
	if (empty($_POST['tempat_lahir'])) {
	$errors[] = 'You forgot to enter tempat_lahir.';
	} else {
	$t = mysqli_real_escape_string($dbc, trim($_POST['tempat_lahir']));	
	}

	if (empty($_POST['password'])) {
	$errors[] = 'You forgot to enter password.';
	} else {
	$p = mysqli_real_escape_string($dbc, trim($_POST['password']));
	}
if (empty($errors)) { // If everything's OK.
// Test for unique nama:
$q = "SELECT user FROM user WHERE nama='$n' AND user != $u";
$r = @mysqli_query($dbc, $q);
if (mysqli_num_rows($r) == 0) {
// Make the query:
$q = "UPDATE user SET user='$u', nama='$n', alamat='$a', jenis_kelamin='$j', umur='$um', agama='$ag',tempat_lahir='$t', password='$p' 
WHERE user LIMIT 1";
$r = @mysqli_query ($dbc, $q);
if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
// Print a message:
echo '<p>User telah di edit.</p>';
} else { // If it did not run OK.
echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; //Debugging message.
}
} else { // Already registered.
echo '<p class="error">The email address has already been 
registered.</p>';
}
} else { // Report the errors.
echo '<p class="error">The following error(s) occurred:<br />';
foreach ($errors as $msg) { // Print each error.
echo " - $msg<br />\n";
}
echo '</p><p>Please try again.</p>';
} // End of if (empty($errors)) IF.
} // End of submit conditional.
// Always show the form...
// Retrieve the user's information:
$q = "SELECT user, nama, alamat,jenis_kelamin,umur,agama,tempat_lahir,password FROM user WHERE user";   
$r = @mysqli_query ($dbc, $q);
if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.
// Get the user's information:
$row = mysqli_fetch_array ($r, MYSQLI_NUM);
// Create the form:
echo '<form action="edituser.php" method="post">
<p>User ID: <input type="integer" name="user" size="15" maxlength="15" 
value="' . $row[0] . '" /></p>
<p>Nama: <input type="text" name="nama" size="20" maxlength="40" 
value="' . $row[1] . '" /></p>
<p>Alamat: <input type="text" name="alamat" size="40" maxlength="40" 
value="' . $row[2] . '" /> </p>
<p>Jenis Kelamin: <input type="text" name="jenis_kelamin" size="5" maxlength="8"
value="' . $row[3] . '" /> </p>
<p>Umur : <input type="integer" name="umur" size="2" maxlength="3"
value="' . $row[4] . '" /> </p>
<p>Agama : <input type="text" name="agama" size="2" maxlength="10"
value="' . $row[5] . '" /> </p>
<p>Tempat lahir: <input type="text" name="tempat_lahir" size="20" maxlength="10"
value="' . $row[6] . '" /> </p>
<p>Password: <input type="password" name="password"
value="' . $row[7] . '" /> </p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';
} else { // Not a valid user ID.
echo '<p class="error">This page has been accessed in error.</p>';
}
mysqli_close($dbc);
echo '<p> Kembali ke <a href=view.php>View Data</a></p>';
?>