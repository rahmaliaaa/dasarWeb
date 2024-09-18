<?php
$nilaiNumberik = 92;

if ($nilaiNumberik >= 90 && $nilaiNumberik <= 100) {
    echo "Nilai Huruf: A";
} else if ($nilaiNumberik >= 80 && $nilaiNumberik < 90) {
    echo "Nilai Huruf: B";
} else if ($nilaiNumberik >= 70 && $nilaiNumberik < 80) {
    echo "Nilai Huruf: C";
} else if ($nilaiNumberik < 70) {
    echo "Nilai Huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanan adalah : $jumlahBuah";

echo "<br><br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah : $totalSkor";
