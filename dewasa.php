<?php
$usia = [12,15,17,20,25,30,35,40,45,50];
$dewasa = 0;
$anak = 0;
foreach($usia as $value){
    if($value >= 17){
        $dewasa++;
    }
    else{
        $anak++;
    }
}
echo "List usia : ". implode(" ", $usia). "<br>";
echo "Jumlah kategori dewasa : $dewasa <br>";
echo "Jumlah kategori anak : $anak <br>";
