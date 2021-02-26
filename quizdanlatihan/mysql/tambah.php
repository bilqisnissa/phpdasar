<?php
require 'functions.php';
//cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    } else {
        //kalo gagal
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Tambah Data Buku</h1>

    <form action="" method="post">

        <label for="gambar_buku">Gambar : </label>
        <input type="text" name="gambar_buku" id="gambar_buku" required></input>
        <p>
            <label for="judul_buku">Judul Buku : </label>
            <input type="text" name="judul_buku" id="judulbuku" required></input>
        <p>
            <label for="harga_buku">Harga Buku : </label>
            <input type="text" name="harga_buku" id="harga_buku" required></input>
        <p>
            <label for="tahun_terbit">Tahun Terbit : </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required></input>

        <p>
            <button type="submit" name="submit"> Submit </button>
    </form>
</body>

</html>