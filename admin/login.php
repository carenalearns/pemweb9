<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.inc.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "masuk";
	header("location:cetak.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>