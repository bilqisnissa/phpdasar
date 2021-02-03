<?php

//SOAL 1
for($i = 0; $i < 101; $i++){
    echo "$i" . " ";
}


//SOAL 2
//4.28 subuh
//12.04 dzuhur
//15.28 ashar
//18.19 maghrib
//19.32 isya

echo "<p>";

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam = "4.28"){
    $waktu = "Subuh";
}elseif ($jam = "12.04"){
    $waktu = "Dzuhur";
}elseif ($jam = "15.28"){
    $waktu = "Ashar";
}elseif ($jam = "18.19"){
    $waktu = "Maghrib";
}elseif ($jam = "19.32"){
    $waktu = "Isya";
}else {
    $waktu = "bukan waktu sholat";
}

echo "Waktunya Sholat $waktu";

echo "<p>";

//SOAL 3
//90-100 A
//80-90 B 
//70-80 C

$nilai = 85;

if ($nilai > 90 && $nilai <= 100){
    $hasil = "A";
}elseif ($nilai > 80 && $nilai <= 90) {
    $hasil = "B";
}elseif($nilai >= 70 && $nilai <= 80){
    $hasil = "C";
}
echo "Nilai Zaki adalah $hasil";

?>