<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$Koneksi = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("daftar", $Koneksi);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("SELECT nama from user where user='$user_check'", $Koneksi);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['nama'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
}
?>