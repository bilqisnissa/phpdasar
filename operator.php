<?php

//operator penggabung string
//menggunakan "."
$nama_depan = "Bilqis";
$nama_belakang = "Muflihunnisa";

var_dump ($nama_depan . " " . $nama_belakang);
echo "<p>";

//operator aritmatika
// menggunakan + - * / %
$x = 7;
$y = 2;
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<p>";

//operator assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x /= 5;
echo $x;
echo "<br>";

$nama = "Bil";
$nama .= "qis";
var_dump ($nama);
echo"<p>";



//operator perbandingan
// <, >, <=, >=, ==, !=
//var_dump = menampilkan informasi dari variable
var_dump(1 == "1");
echo"<p>";


//operator identitas
//===, !==
var_dump(1 !== "1");
echo"<p>";


//logika
//&& || !
$x = 20;
// && (dan) = dua dua nya harus bener
var_dump($x < 10 && $x % 2 == 0);

echo"<p>";
// || (atau) = salah satu bener gpp
var_dump($x = 20 || $x / 2 == 6);


?>