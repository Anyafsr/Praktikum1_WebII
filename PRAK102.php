<?php
//membuat variabel
$tinggi = 5.4;
$jrijri = 4.2;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$alasprism = 5.2;
$tinggiprism = 8.2;
$tinggilim = 9;

//membuat variabel untuk volume bangun ruang
$volumetbung = 3.14*$jrijri*$jrijri*$tinggi;
$volumekrucut = 1/3*3.14*$jrijri*$jrijri*$tinggi;
$volumebol = 4/3*3.14*$jrijri*$jrijri*$jrijri;
$volumeprism = (1/2*$alasprism*$tinggi)*$tinggiprism;
$volumelim = 1/3*$panjang*$lebar*$tinggilim;

//membuat variabel dengan digit terakhir NIM
$nim = 1;

//pengkondisian menggunakan switch case
switch ($nim) {
    case ($nim == 0 || $nim == 1):
        echo number_format ($volumetbung,3) . "m3";
        break;
    case ($nim == 2 || $nim == 3):
        echo number_format ($volumekrucut,3) . "m3";
        break;
    case ($nim == 4 || $nim == 5):
        echo number_format ($volumebol,3) . "m3";
        break;
    case ($nim == 6 || $nim == 7):
        echo number_format ($volumeprism,3) . "m3";
        break;
    case ($nim == 8 || $nim == 9):
        echo number_format ($volumelim,3) . "m3";
        break;
    default:
        echo "Not Available.";
}

?>