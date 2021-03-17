<?php
require 'functions_movie.php';
//cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {
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
    <h1> Add Movie Data</h1>

    <form action="" method="post">

        <label for="poster_film">Poster : </label>
        <input type="text" name="poster_film" id="poster_film" required></input>
        <p>
            <label for="judul_film">Title : </label>
            <input type="text" name="judul_film" id="judul_film" required></input>
        <p>
            <label for="tahun_terbit">Release Date : </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required></input>
        <p>
            <label for="rate_film">Rate Movie : </label>
            <input type="text" name="rate_film" id="rate_film" required></input>

        <p>
            <button type="submit" name="submit"> Submit </button>
    </form>
</body>

</html>