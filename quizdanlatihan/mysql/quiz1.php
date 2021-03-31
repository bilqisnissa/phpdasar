<?php
require'functions.php';

$result = get("SELECT * FROM tb_book");

if (isset($_POST["search"])){
    $result = cari($_POST["keyword"]);
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
    <h1>Daftar Buku</h1>

    <a href="tambah.php">tambah data buku</a>
    <p>

    <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus 
    placeholder="search here!" autocomplete="off">
    <button type="submit" name="search"> Search </button>
    </form>

    <p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>aksi</th>
            <th>Gambar</th>
            <th>Judul Buku</th>
            <th>Harga</th>
            <th>Tahun Terbit</th>
        </tr>

    <?php $i = 1;?>
    <?php foreach($result as $row):?>


        <tr>

            <td><?= $i; ?></td>

            <td>
            <a href="ubah.php?id=<?= $row["id_buku"];?>">ubah | </a>
            <a href="hapus.php?id=<?= $row["id_buku"];?>">hapus</a>
            </td>

            <td><img src="img/<?= $row["gambar_buku"]; ?>" width="100" height="120"></td>
            <td><?= $row["nama_buku"]?></td>
            <td><?= $row["harga_buku"]?></td>
            <td><?= $row["tahun_terbit"]?></td>

        </tr>
        
        <?php $i++?>

        <?php endforeach;?>
    </table>
</body>

</html>