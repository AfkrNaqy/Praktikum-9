<?php
    include "connect.php";
    $sql = "CREATE TABLE tb_kontak(
        id int(4) NOT NULL auto_increment PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        jkel VARCHAR(10) NOT NULL,
        email VARCHAR(40) NOT NULL,
        alamat VARCHAR(50) NOT NULL,
        kota VARCHAR(20) NOT NULL,
        pesan TEXT NOT NULL
        )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    }else{
        echo "error creating table: " . mysqli_connection_error($conn);
    }
    mysqli_close($conn);
?>