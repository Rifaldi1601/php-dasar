<?php

//menghitung Jumlah Karakter
$kalimat = "Belajar Web Programming di Mediatama";
echo strlen($kalimat);

echo "<br>";

//menghitung jumlah kata pada string
$kalimat = "Belajar Web Programming di Mediatama";
echo str_word_count($kalimat);

echo "<br>";

//membalik string
$kalimat = "Belajar Web Programming di Mediatama";
echo strrev($kalimat);

echo "<br>";

//mengganti string dengan str_replace
$kalimat = "Belajar Web Programming di Mediatama";
echo str_replace("Belajar", "Mempelajari", $kalimat);
