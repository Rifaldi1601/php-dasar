<?php

echo "<h2>www.mediatamaweb.co.id</h2>";
echo "<br/>";

$kalimat = "belajar pemrogaman di mediatama";

// memisahkan string menjadi array
$data = explode(" ", $kalimat);

// string menjadi array
print_r($data);
//print_r berguna untuk menampilkan isi array

echo "<br/>";
echo "<br/>";

echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];

echo "<br/>";
echo "<br/>";
echo "<h3>Menggabungkan string dengan implode</h3>";
echo "<br/>";

// menggabungkan string kembali dengan fungsi implode()
echo implode(" ", $data);
