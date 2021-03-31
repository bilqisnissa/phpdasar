<?php
require 'functions_movie.php';
$id = $_GET["id"];

if(delete($id) > 0){
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'index_movie.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    </script>
    ";
}
echo mysqli_error($id);

?>