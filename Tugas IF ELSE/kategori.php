<?php
//variabel 
$nama = "Juki";
$tinggibadan = 167;
$beratbadan = 63;

//rumus BMI
$tinggi_meter = $tinggibadan/ 100;
$bmi = $beratbadan / ($tinggi_meter ** 2);

//kategori BMI
if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $kategori = "Sedang";
} else {
    $kategori = "Gemuk";
}

echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori";
?>