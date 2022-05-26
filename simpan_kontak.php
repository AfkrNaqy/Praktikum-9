<?php
// memanggil file untuk diakses ke dalam file internal
include "admin/koneksi.inc.php";

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

// perintah untuk memasukkan kedalam database
$sql ="INSERT INTO tb_kontak SET nama='$vnama',
jkel='$vjkel',
email='$vemail',
alamat='$valamat',
kota='$vkota',
pesan='$vpesan'";

// melakukan perintah sekaligus mengecek apakah data berhasil dieksekusi
// dan masuk ke dalam database atau tidak
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:kontak.html");
?>