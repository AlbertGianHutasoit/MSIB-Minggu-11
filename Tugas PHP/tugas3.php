<?php
$n=9; //variabel untuk jumlah baris, jumlah angka dalam setiap baris

for ($i=1;$i<$n+1;$i++) { // Loop pertama untuk mengontrol jumlah baris
    for ($j=0;$j<$i;$j++) { // Loop kedua yaitu perulangan kolom untuk mencetak angka pada setiap baris
        echo $j;
    }
    echo "<br>"; // Mencetak baris baru setelah mencetak angka pada satu baris
}
?>