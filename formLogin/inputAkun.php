<?php
// berfungsi untuk melakukan koneksi pada mysql
$servername="localhost";
$username="root";
$password="";
$database = "db_kontak";
$conn = mysqli_connect($servername, $username, $password, $database) or die("Koneksi gagal dibangun");

// berfungsi untuk memasukkan data atau akun yang digunakan untuk login
$sql ="INSERT INTO tb_login SET username='afkar naqy',
password='Bismillah123'";

mysqli_query($conn, $sql) or die("Proses simpan ke tabel gagal");
header("location:index.php");
?>