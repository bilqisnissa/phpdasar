<?php
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");
$result = mysqli_query($db, "SELECT * FROM tb_book");

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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul Buku</th>
            <th>Harga</th>
            <th>Tahun Terbit</th>
        </tr>

    <?php $i = 1;?>
    <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar_buku"]; ?>" width="100" height="100"></td>
            <td><?= $row["nama_buku"]?></td>
            <td><?= $row["harga_buku"]?></td>
            <td><?= $row["tahun_terbit"]?></td>
        </tr>
        
        <?php $i++?>

        <?php endwhile;?>
    </table>
</body>

</html>