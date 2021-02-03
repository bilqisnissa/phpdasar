<?php

//array numerik
$food=["Indomie", "Spaghetti", "Ketoprak", "Sate"];

//array assosiative
$makanan=[
    ["nama" => "Dodol",
    "asal" => "Garut"],

    ["nama" => "Ramen",
    "asal" => "Jepang"],

    ["nama" => "Pizza",
    "asal" => "Italy"],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
</head>
<body>

<!-- array numerik -->
<h1>Daftar Makanan</h1>
<?php foreach($food as $f):?>
        <ul>
            <li><?php echo $food[0]?></li>
            <li><?php echo $food[3]?></li>
        </ul>
    <?php endforeach;?>

<!-- array assosiative -->
<?php foreach($makanan as $m):?>
    <ul>
        <li>Nama : <?= $m["nama"];?></li>
        <li>Asal : <?= $m["asal"];?></li>
        </ul>
<?php endforeach;?>

</body>
</html>
