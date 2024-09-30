<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" id="nama1" name="nama1" placeholder="Masukkan Nama Pertama" required><br><br>
        <input type="text" id="nama2" name="nama2" placeholder="Masukkan Nama Kedua" required><br><br>
        <button type="submit" name="btn">Kirim</button>
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];

        $nama1_len = strlen($nama1);
        $nama2_len = strlen($nama2);
        $selisih = abs($nama1_len - $nama2_len);

        if ($nama1_len > $nama2_len) {
            echo "<br><u>$nama1</u> Lebih Panjang Dari <u>$nama2</u> selisih : <b>$selisih</b> karakter";
        }
        else if($nama2_len > $nama1_len){
            echo "<br><u>$nama2</u> Lebih Panjang Dari <u>$nama1</u> selisih : <b>$selisih</b> karakter";
        }
        else{
            echo"<br> <u>$nama1</u> Sama panjang dengan <u>$nama2</u>";
        }
    }

    
    ?>
</body>
</html>