<?php
// array index
$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

echo "<b>Bilangan yang ada di kedua variabel</b> <br>";
foreach($bil1 as $value){
    if(in_array($value, $bil2)){
        echo $value . ", ";
    }
}

echo "<br><br><b>Bilangan yang tidak ada di kedua variabel</b> <br>";
foreach($bil1 as $value){
    if(!in_array($value, $bil2)){
        echo $value . ", ";
    }
}