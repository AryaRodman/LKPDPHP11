<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" id="jamkerja" name="jamkerja" placeholder="Masukkan lama kerja" required><br><br>
        <button type="submit" name="btn">Kirim</button>
    </form>
<?php
if (isset($_POST['btn'])) {

    $jamkerja = $_POST['jamkerja'];
    $jamlembur = $jamkerja - 8;
    if($jamkerja > 8){
        $kompensasi = 50000;
        if($jamkerja > 9){
            $kompensasi = (($jamkerja - 9) * 25000) + $kompensasi;
        }
    }
    else if($jamkerja < 8) {
        $kompensasi = 0;
        $jamlembur = "Tidak lembur";
    }
    
    echo "Lama kerja : $jamkerja jam <br>";
    echo "Jam lebih : $jamlembur <br>";
    echo "Jumlah kompensasi : Rp. ". number_format($kompensasi,0,".",".");
}
?>
</body>
</html>
