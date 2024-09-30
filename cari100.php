<?
$data = [80, 90, 74, 100, 85, 100, 66];
$cari = 100;
$angka = 0;
foreach($data as $value){
    if($value == $cari){
        $angka++;
    }
}

echo "Jumlah angka $cari ada $angka kali";