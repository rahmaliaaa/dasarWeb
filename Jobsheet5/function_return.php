<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(2005, 2023) ." tahun" // isi sesuai dengan tahun lahir kalian
?>