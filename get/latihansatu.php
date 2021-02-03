<?php

/*
VARIABLE SUPER GLOBAL (variable dari php)
tipe datanya array assosiative
$_GET
$_POST
$_REQUEST
$_COOKIE
$_SESSION
$_SERVER
$_ENV
$GLOBALS
*/

//($_GET)
//ngirim data lewat url
//data tidak rahasia

//POST ($_POST)
//ngirim data lewat form
//login

// echo $_GET["nama"]="Bilqis";
// echo"<br>";
// var_dump($_GET);

$siswi=[
    ["nama" => "Bilqis",
    "jurusan" => "RPL",
    "domisili" => "Bekasi"],

    ["nama" => "Aca",
    "jurusan" => "RPL",
    "domisili" => "Tangerang"],
];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswi</h1>

    <?php foreach($siswi as $sw):?>
    <li>

        <a href="latihandua.php?
        nama=<?= $sw["nama"];?>
        &jurusan=<?=$sw["jurusan"];?>
        &domisili=<?=$sw["domisili"];?>">

        <?= $sw["nama"];?>
        </a>
    </li>

    <?php endforeach; ?>

</body>
</html>