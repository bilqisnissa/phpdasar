<?php
require 'functions.php';
$id = $_GET["id"];
//var_dump($id);

$buku = get("SELECT * FROM tb_book WHERE id_buku = $id")[0];


//cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'quiz1.php'
            </script>
        ";
    } else {
        //kalo gagal
        echo "
            <script>
            alert('data gagal diubah!');
            </script>
        ";
    }

    $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
    echo mysqli_error($db);
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
    <h1> Ubah Data buku</h1>

    <form action="" method="post">

    <input type="hidden" name="id_buku" value="<?= $buku["id_buku"];?>"

        <label for="gambar_buku">Gambar : </label>
        <input type="text" name="gambar_buku" id="gambar_buku" required
        value="<?= $buku["gambar_buku"];?>"></input>
        <p>
            <label for="nama_buku">Judul : </label>
            <input type="text" name="nama_buku" id="nama_buku" required
            value="<?= $buku["nama_buku"];?>"></input></input>
        <p>
            <label for="harga_buku">Harga : </label>
            <input type="text" name="harga_buku" id="harga_buku" required
            value="<?= $buku["harga_buku"];?>"></input></input>
        <p>
            <label for="tahun_terbit">Tahun Terbit : </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required
            value="<?= $buku["tahun_terbit"];?>"></input></input>

        <p>
            <button type="submit" name="submit"> Submit </button>
    </form>
</body>

</html>