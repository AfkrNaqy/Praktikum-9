<?php
// menghubungkan koneksi.inc.php kedalam program
include "koneksi.inc.php";

// perintah untuk mengambil data dari tabel
$sql ="SELECT * FROM tb_kontak";
$query = mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
// berfungsi untuk membuat syntax dari html
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>Id</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";
$no=1;
// berfungsi untuk melakukan loop untuk mengambil setiap data yang ada pada tabel
while($hasil=mysqli_fetch_row($query)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
$no++;
}
echo "</table>";
echo "
<a href=main/kontak.html>Kembali</a>
";
?>