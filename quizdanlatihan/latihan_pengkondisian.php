<?php
//6-10 pagi
//11-2 siang
//3-6 sore
//7-12 malam
//1-6 fajar

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "06.00" && $jam < "10.00"){
    $waktu = "Pagi";
}elseif ($jam > "10.00" && $jam < "14.00"){
    $waktu = "Siang";
}elseif ($jam > "14.00" && $jam < "18.00"){
    $waktu = "Sore";
}elseif ($jam >= "18.00" && $jam < "00.00"){
    $waktu = "Malam";
}else{
    $waktu = "Fajar";
}

echo "Selamat $waktu, Bilqis"
?>