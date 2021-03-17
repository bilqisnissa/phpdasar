<?php
require'functions_movie.php';
//ambil data dari table
$siswa = get("SELECT * FROM tb_movie");


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
    <h1>Daftar Film</h1>
    <a href="add_movie.php">add movie data</a>
    <p>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Picture</th>
            <th>Title</th>
            <th>Release Date</th>
            <th>Movie Rate</th>
        </tr>

    <?php $i = 1;?>
    <?php foreach($siswa as $row):?>

        <tr>

            <td><?= $i; ?></td>

            <td>
            <a href="change_movie.php?id=<?= $row["id_film"];?>">change | </a>
            <a href="delete_movie.php?id=<?= $row["id_film"];?>">delete</a>
            </td>
            
            <td><img src="img/<?= $row["poster_film"]; ?>" width="50"></td>
            <td><?= $row["judul_film"]?></td>
            <td><?= $row["tahun_terbit"]?></td>
            <td><?= $row["rate_film"]?></td>
        </tr>
        
        <?php $i++?>

        <?php endforeach; ?>
    </table>
</body>

</html>