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
    $nama = $post["nama_siswa"];
    $gambar = $post["gambar_siswa"];
    $email = $post["email_siswa"];
    $kelas = $post["kelas_siswa"];

    //query insert data
    $query = "INSERT INTO tb_siswa VALUES(null, '$gambar', '$nama', '$kelas', '$email')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;

    mysqli_query($db, "DELETE FROM tb_siswa WHERE id_siswa = $id" );
    return mysqli_affected_rows($db);

}

function ubah($data){
    global $db;
    //ambil data dari tiap elemen dalam form
    $id = $data["id_siswa"];
    $nama = $data["nama_siswa"];
    $gambar = $data["gambar_siswa"];
    $email = $data["email_siswa"];
    $kelas = $data["kelas_siswa"];

    $query = "UPDATE tb_siswa SET 
    nama_siswa = '$nama',
    gambar_siswa = '$gambar',
    email_siswa = '$email',
    kelas_siswa = '$kelas'
    
    WHERE id_siswa = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
