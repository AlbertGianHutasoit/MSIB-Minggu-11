<?php
echo"<b>Tugas volume bangun ruang</b><br><br>";
// Volume Bangun Ruang Kubus
$sk=4; //sisi kubus
$vk=$sk**3; //rumus volume kubus

echo"Volume bangun ruang kubus <br>
Jika sisi = $sk cm<br>
maka volume kubus = <b>$vk cm&sup3</b> <br>";

echo"<br>=====================================<br>";

// Volume Bangun Ruang Balok
$pb=24; //panjang balok
$tb=5; //tinggi balok
$lb=10; //lebar balok
$vb=$pb*$lb*$tb; //rumus volume balok

echo"Volume bangun ruang balok <br>
Jika panjang = $pb cm, lebar = $lb cm, tinggi = $tb cm <br>
maka volume balok = <b>$vb cm&sup3</b> <br>";

echo"<br>=====================================<br>";

// Volume Bangun Ruang Prisma Segitiga
$tp=12; //tinggi prisma
$a=6; //alas segitiga
$ts=8; //tinggi segitiga
$vp=(($a*$ts)/2)*$tp; //rumus volume prisma segitiga

echo"Volume bangun ruang prisma segitiga <br>
Jika tinggi prisma = $tp cm, dan <br>
panjang sisi alas dan tinggi segitiga = $a cm dan $ts cm<br>
maka volume balok = <b>$vp cm&sup3</b> <br>";

echo"<br>=====================================<br>";



































?>