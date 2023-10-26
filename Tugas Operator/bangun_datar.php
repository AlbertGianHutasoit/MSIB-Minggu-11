<?php
echo"<b>Tugas luas bangun datar</b><br><br>";
// Luas Bangun Datar Persegi
$sp=4; //sisi persegi panjang
$lp=$sp*$sp; //rumus luas persegi

echo"Luas bangun datar persegi <br>
Jika sisi = $sp cm<br>
maka luas persegi = <b>$lp cm&sup2</b> <br>";

echo"<br>============================<br>";


// Luas Bangun Datar Persegi Panjang
$ppp=11; //panjang persegi panjang
$lpp=7; //lebar persegi panjang
$l=$ppp*$lpp; //rumus luas persegi panjang

echo"<br>Luas bangun datar persegi panjang <br>
Jika panjang = $ppp cm dan lebar = $lpp cm <br>
maka luas persegi panjang = <b>$l cm&sup2</b> <br>";

echo"<br>============================<br>";

// Luas Bangun Datar Segitiga
$as=8; //alas segitiga
$ts=4; //tinggi segitiga
$ls=1/2*$as*$ts; //rumus luas segitiga

echo"<br>Luas bangun datar segitiga <br>
Jika alas = $as cm dan tinggi = $ts cm<br>
maka luas segitiga = <b>$ls cm&sup2</b> <br>";

echo"<br>============================<br>";

// Luas Bangun Datar Jajar Genjang
$aj=14; //alas jajar genjang
$tj=5; //tinggi jajar genjang
$lj=$aj*$tj; //rumus luas jajar genjang

echo"<br>Luas bangun datar jajar genjang <br>
Jika alas = $aj cm dan tinggi= $tj cm <br>
maka luas jajar genjang = <b>$lj cm&sup2</b> <br>";

echo"<br>============================<br>";

// Luas Bangun Datar Belah Ketupat
$d1=18; //diagonal 1 belah ketupat
$d2=10; //diagonal 2 belah ketupat
$lb=1/2*$d1*$d2; //rumus luas belah ketupat

echo"<br>Luas bangun datar belah ketupat <br>
Jika diagonal 1 = $d1 cm dan diagonal 2 = $d2 cm<br>
maka luas belah ketupat = <b>$lb cm&sup2</b> <br>";

?>