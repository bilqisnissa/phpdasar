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

function tambah($post){
    global $db;

    //ambil data dari tiap elemen dalam form
    $nama = $post["nama_buku"];
    $gambar = $post["gambar_buku"];
    $harga = $post["harga_buku"];
    $terbit = $post["tahun_terbit"];

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES(null, '$gambar', '$nama', '$harga', '$terbit')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;

    mysqli_query($db, "DELETE FROM tb_book WHERE id_buku = $id" );
    return mysqli_affected_rows($db);

}

function ubah($data){
    global $db;
    //ambil data dari tiap elemen dalam form
    $id = $data["id_buku"];
    $nama = $data["nama_buku"];
    $gambar = $data["gambar_buku"];
    $harga = $data["harga_buku"];
    $terbit = $data["tahun_terbit"];

    $query = "UPDATE tb_book SET 
    nama_buku = '$nama',
    gambar_buku = '$gambar',
    harga_buku = '$harga',
    tahun_terbit = '$terbit'
    
    WHERE id_buku = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
