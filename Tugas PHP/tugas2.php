<?php
$n = 9; // variabel untuk jumlah baris

for ($i=$n;$i>=1;$i--) { // Loop pertama untuk mengontrol jumlah baris
    for ($j=1;$j<=$i;$j++) { // Loop kedua untuk perulangan kolom  yaitu mencetak bintang sesuai jumlah baris
        echo "*";
    }
    echo "<br>";// Mencetak baris baru setelah mencetak bintang pada satu baris
}
?>