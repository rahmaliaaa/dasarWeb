<?php

function perkenalan($nama, $salam){
    echo $salam, ", ";
    echo "Perkenalkan, nama saya ", $nama, "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat

perkenalan("Lia", "Hallo");
echo "<hr>";
$saya = "Rahmalia";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
?>