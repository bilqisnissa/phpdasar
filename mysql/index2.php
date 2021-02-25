<?php
//koneksi ke database
//(host, user, pass, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

//ambil data dari table
$result = mysqli_query($db, "SELECT * FROM tb_siswa");
// var_dump( $result);

//ambil data (fetch) mahasiswa

//mysqli_fetch_row() = mengembalikan array numerik
//mysqli_fetch_assoc() = mengembalikan array associative
//mysqli_fetch_array() = mengembalikan kedua array
//mysqli_fetch_obejct() = jadi object

// while($result_siswa = mysqli_fetch_assoc($result)){
    // var_dump($result_siswa);

//}

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
    <h1>Daftar Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
        </tr>

    <?php $i = 1;?>
    <?php while($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar_siswa"]; ?>" width="50"></td>
            <td><?= $row["nama_siswa"]?></td>
            <td><?= $row["kelas_siswa"]?></td>
            <td><?= $row["email_siswa"]?></td>
        </tr>
        
        <?php $i++?>

        <?php endwhile;?>
    </table>
</body>

</html>