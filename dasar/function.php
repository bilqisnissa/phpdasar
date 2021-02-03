<?php
//function = sekumpulan intruksi yg dibungkus dalam sebuah blok

function biodata(){
    echo "Woy<br>";
    echo "Makan<br>";
    echo "Yok!<br>";
}

biodata();
biodata();
echo "<p>";

//date
//untuk menampilkan tanggal dengan format tertentu
/*
l = nama hari lengkap (wednesday)
D = nama hari singkat (wed)
d = tanggal (20)
m = bulan angka (01)
M = bulan text singkat (Jan)
F = bulan text (January)
y = tahun singkat (21)
Y = tahun (2021)
*/
date_default_timezone_set("Asia/jakarta");
echo date("H:i:s");
echo "<p>";


//time
//detik yg sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";


echo date("l, d M Y", time() + 60 * 60 * 24 * 1000);
echo "<p>";

echo date("l", strtotime("23 March 2005"));

?>