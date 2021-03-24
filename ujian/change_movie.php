<?php
require 'functions_movie.php';
$id = $_GET["id"];
$movie = get ("SELECT * FROM tb_movie WHERE id_film = $id")[0];

//cek apakah tombol submit sudah di klik atau belum
if(isset($_POST["submit"])){
   if(change($_POST) > 0){
       //kalo success
       echo "
        <script>
        alert('data berhasil di Ubah!');
        document.location.href = 'index.php';
        </script>
       ";
   }else{
    //klo gagal
    echo "
        <script>
        alert('data gagal di Ubah!');
        </script>
       ";
   }
//    $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
//    echo mysqli_error($db);
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
    <h1> Change Movie Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id_film" value="<?= $movie["id_film"];?>"></input>
        <label for="poster_film">Poster : </label>
        <input type="text" name="poster_film" id="poster_film" required value="<?= $movie["poster_film"];?>"></input>
        <p>
        <label for="judul_film">Title : </label>
        <input type="text" name="judul_film" id="judul_film" required value="<?= $movie["judul_film"];?>"></input>
        <p>
        <label for="tahun_terbit">Release Date : </label>
        <input type="text" name="tahun_terbit" id="tahun_terbit" required value="<?= $movie["tahun_terbit"];?>"></input>
        <p>
        <label for="rate_film">Movie Rate : </label>
        <input type="text" name="rate_film" id="rate_film" required value="<?= $movie["rate_film"];?>"></input>
        <p>
        <button type="submit" name="submit"> Submit </button>
    </form>
    </body>
</html>