<!DOCTYPE html>
<html>
<head>
	<title>Daftar Tamu</title>
	<style type="text/css">
		h1 {font-family: calibri; text-align: center; background-color: #CCFFCC;}
		body {background-color: #CCEEEE; padding-left: 300px; padding-right: 300px;}
	</style>
</head>
<h1>DAFTAR TAMU</h1>
<body>
<?php
session_start();
	if($_SESSION['status']!="masuk"){
		header("location:index.php?pesan=belum_masuk");
	}
echo "<br>";

include 'koneksi.inc.php';
$sql="SELECT nama, jkel, email, alamat, kota, pesan from kontak order by nama;";

$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");

echo "<table align='center' width='100%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";
$no=1;

while($hasil=mysqli_fetch_row($qry)){

echo "<tr>
<td>$no</td>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
</tr>";
$no++;
}
echo "</table>";
?>
<a href="logout.php">KELUAR</a>
</body>
</html>