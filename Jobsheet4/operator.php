<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
echo "Hasil penjumlahan $a dan $b adalah : $hasilTambah<br>";
$hasilKurang = $a - $b;
echo "Hasil pengurangan $a dan $b adalah : $hasilKurang<br>";
$hasilKali = $a * $b;
echo "Hasil penrkaliann $a dan $b adalah : $hasilKali<br>";
$hasilBagi = $a / $b;
echo "Hasil pembagian $a dan $b adalah : $hasilBagi<br>";
$sisaBagi = $a % $b;
echo "Hasil sisa bagi dari $a dan $b adalah : $sisaBagi<br>";
$pangkat = $a ** $b;
echo "Hasil perpangkatan dari $a pangkat $b adalah : $pangkat<br>";

echo "<br><br>";
$hasilSama = $a == $b;
echo "Hasil dari $a sama dengan $b adalah : $hasilSama<br>";
$hasilTidakSama = $a != $b;
echo "Hasil dari $a tidak sama dengan $b adalah : $hasilTidakSama<br>";
$hasilLebihKecil = $a < $b;
echo "Hasil dari $a lebih kecil dari $b adalah : $hasilLebihKecil<br>";
$hasilLebihBesar = $a > $b;
echo "Hasil dari $a lebih besar dari $b adalah : $hasilLebihBesar<br>";
$hasilLebihKecilSama = $a <- $b;
echo "Hasil dari $a lebih kecil sama dengan $b adalah : $hasilLebihKecilSama<br>";
$hasilLebihBesarSama = $a >= $b;
echo "Hasil dari $a lebih besar sama dengan $b adalah : $hasilLebihBesarSama<br>";

echo "<br><br>";
$hasilAnd = $a && $b;
echo "Hasil dari $a AND $b adalah : $hasilAnd<br>";
$hasilOr = $a || $b;
echo "Hasil dari $a OR $b adalah : $hasilOr<br>";
$hasilNotA = !$a;
echo "Hasil dari NOT $a adalah : $hasilNotA<br>";
$hasilNotB = !$b;
echo "Hasil dari NOT $b adalah : $hasilNotB<br>";

echo "<br><br>";
$c = $a += $b;
echo "Hasil dari 10 += $b (penjumlahan): $c<br>";
$d = $a -= $b;
echo "Hasil dari $c -= $b (pengurangan): $d<br>";
$e = $a *= $b;
echo "Hasil dari $d *= $b (perkalian): $e<br>";
$f = $a /= $b;
echo "Hasil dari $e /= $b (pembagian): $f<br>";
$g = $a %= $b;
echo "Hasil dari $f %= $b (modulus): $g<br>";

echo "<br><br>";
$hasilIdentik = $a === $b;
echo "Hasil dari $a === $b (identik): $hasilIdentik<br>";
$hasilTidakIdentik = $a !== $b;
echo "Hasil dari $a !== $b (tidak identik): $hasilTidakIdentik<br>";

//soal cerita
$totalKursi = 45; 
$kursiTerisi = 28; 

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi di restoran: $totalKursi<br>";
echo "Kursi yang telah ditempati: $kursiTerisi<br>";
echo "Jumlah kursi kosong: $kursiKosong<br>";
echo "Persentase kursi kosong: " . number_format($persentaseKosong, 2) . "%<br>";
