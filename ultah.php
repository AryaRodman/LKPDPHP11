<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="teks" placeholder="Masukkan teks" required><br><br>
        <button type="submit" name="btn">Kirim</button><br><br>
    </form>

    <?php   
    if (isset($_POST['btn'])) {
        $teks = $_POST['teks'];

        $jumlahHuruf = filter_var($teks, FILTER_SANITIZE_NUMBER_INT);

        if ($jumlahHuruf) {
            echo"Teks mengandung angka : ". implode(", ", str_split($jumlahHuruf));
        }
        else{
            echo "Teks tidak mengandung angka";
        }
    }
?>
</body>
</html>