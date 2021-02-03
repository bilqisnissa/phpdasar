<?php
//for
/*
didalam kurung ada 3
1. inisialisasi = variable awal
2. kondisi terminasi = memberhentikan pengulangan
3. increment decrement = menentukan pengulangannya
maju atau mundur
*/

for($i = 0; $i < 5; $i++){
    echo "Hello!!<br>";
}

//while
/*kalo kondisinya true lakukan
yg didalam {}*/
//cek kondisinya dulu, baru jalankan perintah
$f = 0;
while($f < 5){
    echo "Welcome<br>";
    $f++;
}

//do while
/*melakukan pengulangan selama
kondisinya true*/
//jalankan dulu, baru cek kondisi
$y = 0;
do{
    echo "woy!!<br>";
    $y++;
}while($y < 5);

?>