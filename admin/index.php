<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
	<style type="text/css">
		h1 {font-family: calibri; text-align: center; background-color: #CCFFCC;}
		body {background-color: #CCEEEE; padding-left: 300px; padding-right: 300px;}
		table {font-weight: bold; font-size: 18px; font-family: calibri;}
	</style>
</head>
<body>
	<h1>MASUK</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('Gagal Masuk!<br>username dan password salah!')</script>";
		}else if($_GET['pesan'] == "keluar"){
			echo "<script>alert('Anda telah berhasil keluar')</script>";
		}else if($_GET['pesan'] == "belum_masuk"){
			echo "<script>alert('Anda harus login untuk mengakses halaman admin')</script>";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="login.php">
		<table align="center">
			<tr>
				<td>Nama Pengguna</td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Masuk"></td>
			</tr>
		</table>			
	</form>
</body>
</html>