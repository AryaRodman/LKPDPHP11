<?php
// kuning = array index
// ungu = array multidimensi
// biru = array asosiatif
$student = [
    [
    'nama' => 'Andi',
    'nilai' => [80,78,82,78,88],
    ],
    [
    'nama' => 'Beni',
    'nilai' => [86,70,80,85,81],
    ],
    [
    'nama' => 'Dani',
    'nilai' => [83,91,70,73,81],
    ],
    [
    'nama' => 'Eko',
    'nilai' => [89,85,84,86,88],
    ],
];

foreach($student as $data){
    $rata = array_sum($data['nilai']) / count($data['nilai']);
    echo "Rata-rata ".$data['nama']." adalah ".$rata."<br>";
}
