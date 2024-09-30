<?php
$y = 10;
$hasil = $y;
$angka = 1;

do {
    echo "$y x 1 = " . ($y *= $angka) . "<br>";
    
    $y--;
} while ($y >= 1);

echo "<br>";

$x = 10;
$Angka = 2;

do {
    echo "$x x 2 = " . ($x * $Angka) . "<br>";
    $x--;
} while ($x >= 1);
?>
