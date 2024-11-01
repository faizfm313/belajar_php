<?php
    function salam($nama, $pembelajaran){
        return "selamat datang di " . $pembelajaran . ",". $nama;
    }

    function hitung_uang($nominal, $jumlah){
        $num = $nominal * $jumlah;
        $string_return = "Rp" . number_format($num, 0, ',', '.');
        return $string_return;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?php echo salam('faiz fm', 'belajar programming'); ?></h1>
    <h3><?php echo hitung_uang(50000, 6); ?></h3>
    
</body>
</html>