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
