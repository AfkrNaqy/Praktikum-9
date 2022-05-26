<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Login page</title>
    <!-- menghubungkan desain css dari file yang telah dituju yaitu sty.css -->
    <link rel="stylesheet" href="sty.css">
</head>

<body>
    <!-- memasukkan gambar pada halaman web -->
    <div class="image">
        <img class="logo" src="logo_upn.png" alt="">
        <img class="logo" src="logo_bem.png" alt="">
        <img class="logo" src="logo_kabinet.png" alt="">
    </div>
    <!-- membuat box login -->
    <div class="box">
        <!-- berefungsi untuk membuat isi dari box atau card login -->
        <h2>LOGIN</h2>
        <!-- membuat form login yang terhubung dengan file php cekAkun.php untuk melakukan
        perintah -->
        <form method="post" action="cekAkun.php">
            <!-- membuat input untuk username -->
            <div class="inputBox">
                <input type="text" name="user" required=""></input>
                <label>Username</label>
            </div>
            <!-- membuat input untuk password -->
            <div class="inputBox">
                <input type="password" name="pass" required=""></input>
                <label>Password</label>
            </div>
            <!-- tombol submmit untuk memasukkan data yang telah dimasukkan
            kedalam file php yang dituju -->
            <input type="submit" name="submit" value="Submit">

        </form>
    </div>
</body>

</html>