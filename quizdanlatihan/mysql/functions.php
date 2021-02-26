<?php
//koneksi ke database
//(host, user, pass, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($post){
    global $db;

    //ambil data dari tiap elemen dalam form
    $judul = $post["judul_buku"];
    $gambar = $post["gambar_buku"];
    $harga = $post["harga_buku"];
    $tahun = $post["tahun_terbit"];

    //query insert data
    $query = "INSERT INTO tb_book VALUES(null, '$gambar', '$judul', '$tahun', '$harga')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
