<?php
//array biasa
$murid = ["Bilqis", "SMK IDN", "hirosasi01@gmail.com"];


//array didalam array
$mahasiswi = [
    ["Bilqis", "SMK IDN", "hirosasi01@gmail.com"],
    ["Keisha", "SMK IDN", "keishaputri@gmail.com"],
    ["Uzlah", "SMK IDN", "priyankauzlah@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan List</title>
</head>
<body>

    <h1>Murid</h1>
    <ul>
    <li><?php echo $murid[0]?></li>
    <li><?php echo $murid[1]?></li>
    <li><?php echo $murid[2]?></li>
    </ul>

    <ul>
       <?php foreach($murid as $m):?>
       <li><?= $m?></li>   
       <?php endforeach; ?>   
    </ul>

    <!-- mencetak array di dalam array menggunakan foreach -->
    <ul>
        <?php foreach($mahasiswi as $mhs): echo"<br>"; ?>
            <?php foreach ($mhs as $m): ?>
                <li> <?= $m; ?> </li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>

</body>
</html>