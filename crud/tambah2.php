<?php
//koneksi ke databse
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

//cek apakah tombol submit sudah di klik atau belum
if(isset($_POST["submit"])){
    //ambil data dari setiap elemen form
    $nama = $_POST["nama_siswa"];
    $gambar = $_POST["gambar_siswa"];
    $email = $_POST["email_siswa"];
    $kelas = $_POST["kelas_siswa"];

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES(null, '$gambar', '$nama', '$kelas', '$email')";
    mysqli_query($db, $query);

    var_dump(mysqli_affected_rows($db));



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
    <h1> Tambah Data Siswa</h1>

    <form action="" method="post">

    <label for="gambar_siswa">Gambar : </label>
    <input type="text" name="gambar_siswa" id="gambar_siswa"></input>
    <p>
    <label for="nama_siswa">Nama : </label>
    <input type="text" name="nama_siswa" id="namasiswa"></input>
    <p>
    <label for="kelas_siswa">Kelas : </label>
    <input type="text" name="kelas_siswa" id="kelas_siswa"></input>
    <p>
    <label for="email_siswa">Email : </label>
    <input type="text" name="email_siswa" id="email_siswa"></input>

    <p>
    <button type="submit" name="submit"> Submit </button>
    </form>
</body>
</html>