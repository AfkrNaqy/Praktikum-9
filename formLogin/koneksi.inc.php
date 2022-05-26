<?php
    // berfungsi untuk melakukan koneksi dengan database
    // menggunakan variabel untuk menyimpan nama dari server
    $servername="localhost";
    // memasukkan username dari database
    $username="root";
    // membuat password yang digunakan pada database
    $password="";
    // melakukan koneksi dengan database yang dipilih
    $database = "db_kontak";
    // melakukan perintah untuk koneksi terhadap database
    $conn = mysqli_connect($servername, $username, $password, $database) or die("Koneksi gagal dibangun");
?>