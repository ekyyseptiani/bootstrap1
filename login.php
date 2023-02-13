<?php
//mengaktifkan session phpsession_start ();
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$login=mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek =mysqli_num_rows($login);
if($cek>0){
	$SESSION['username'] = $username;
	$SESSION['status'] = "login";
header ("location:informasi.php");}
else{
	header ("location:informasi.php?pesan=gagal");}
?>