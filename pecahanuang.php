<?php
$uang = 257000;
echo "Uang : Rp." . number_format($uang,0,".",".") . "<br>";
echo "Lembar rupiah : <br> ";

$pecahan = array(100000,50000,20000,10000,5000,2000,1000,500);
$lembar_yang_terpakai = [];

echo"<ul>";
foreach($pecahan as $key => $item){
    // jadi, hasil di bagian i akan diisi dengan floor (pembulatan desimal ke bawah) dengan uang dibagi pecahan yang ada di bagian i
    $lembar_yang_terpakai[$key] = floor($uang/$pecahan[$key]);
    // jika pecahan yang ada di bagian i lebih dari 0, cetak pecahan yang ada di bagian i
    if($lembar_yang_terpakai[$key] > 0 ){
        echo "<li>" . "Rp." . number_format($pecahan[$key],0,".",".") . " : " . $lembar_yang_terpakai[$key] . "</li>";
    }
    $uang = $uang % $pecahan[$key];
}

echo "</ul>";