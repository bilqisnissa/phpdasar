<?php
//isset = untuk ngecek variable apakah udah ada apa blum
//di $_GET ada data apa engga? kalo misalnya gada data, paksa pindah ke latihansatu.php
if( !isset($_GET["nama"]) || 
    !isset($_GET["jurusan"]) ||
    !isset($_GET["domisili"])
){
    //memindahkan ke halaman lain
    header("Location: latihansatu.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $_GET["nama"]?></li>
        <li>Jurusan : <?= $_GET["jurusan"]?></li>
        <li>Domisili : <?= $_GET["domisili"]?></li>
    </ul>

    <a href="latihansatu.php">back</a>
</body>
</html>