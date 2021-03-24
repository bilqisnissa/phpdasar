<?php
//koneksi ke database
//(host, user, pass, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($post){
    global $db;

    //ambil data dari tiap elemen dalam form
    $judul = $post["judul_film"];
    $poster = $post["poster_film"];
    $terbit = $post["tahun_terbit"];
    $rate = $post["rate_film"];

    //query insert data
    $query = "INSERT INTO tb_movie VALUES(null, '$poster', '$judul', '$terbit', '$rate')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($id){
    global $db;

    mysqli_query($db, "DELETE FROM tb_movie WHERE id_film = $id" );
    return mysqli_affected_rows($db);

}

function change($data){
    global $db;
    //ambil data dari tiap elemen dalam form
    $id = $data["id_film"];
    $judul = $data["judul_film"];
    $poster = $data["poster_film"];
    $terbit = $data["tahun_terbit"];
    $rate = $data["rate_film"];

    $query = "UPDATE tb_movie SET 
    judul_film = '$judul',
    poster_filn = '$poster',
    tahun_terbit = '$terbit',
    rate_film = '$rate'
    
    WHERE id_film = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}