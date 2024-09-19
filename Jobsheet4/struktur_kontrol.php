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

echo "<br><br>";
$skorUjian = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($skorUjian as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;


foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 92 || $nilai <= 70) {
        continue;
    }
    $totalNilai += $nilai;
    $avg = $totalNilai / count($nilaiSiswa);
}
echo "Rata-rata nilai: $avg <br>";

echo "<br><br>";
$totalPembelian = 106000;
$hargaProduk = 120000;
$diskon = 0.2;

if ($totalPembelian > 100000){
    $hargaDiskon = $hargaProduk - ($hargaProduk * $diskon);
    echo "Harga setelah diskon: $hargaDiskon";
} else { 
    echo "Harga Normal: $hargaProduk";
}

$skor = 500;
echo "Total Skor Pemain Adalah: $skor. <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ";
echo ($skor > 500) ? "<b>YES</b>" : "<b>NO</b>";