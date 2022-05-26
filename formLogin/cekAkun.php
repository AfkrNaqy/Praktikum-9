<?php
    // menghubungkan koneksi.inc.php kedalam program
    include "koneksi.inc.php";

 
    if (isset($_SESSION['username'])) {
        header("Location: cetak.php");
    }
    // untuk melakukan pengecekan pada data form yang telah diisi
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        // mengambil data dari tabel yang telah dibuat pada database db_kontak 
        // yang telah dibuat sebelumnya
        $sql = "SELECT * FROM tb_login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        // melakukan pengecekan pada query dan data form yang telah dimasukkan
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            // mengalihkan pada file cetak.php ketika username dan password
            // benar atau username dan password sama dengan yang ada di database
            header("Location: cetak.php");
        } else {
            // memberikan pesan alert ketika user memasukkan username atau password yang salah
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>