<?php
    $arr = [
        ["senin", "selasa", "rabu"],
        ["januari", "februari", "maret"],
        ["2020", "2021", "2023"],
    ];

    $dataPerson = [
        [
            "nama"=> "faizfm",
            "kota"=> "jakarta",
            "baju"=> "putih",
            "makanan_favorite"=> ["roti", "soto"]
        ],
        [
            "nama"=> "juned",
            "kota"=> "bali",
            "baju"=> "biru",
            "makanan_favorite"=> ["kue", "pia"]
        ],
        [
            "nama"=> "faixxxx",
            "kota"=> "yogyakarta",
            "baju"=> "abu",
            "makanan_favorite"=> ["nasgor", "baso"]
        ],
    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="margin-bottom: 24px">
        <?php foreach($arr as $data): ?>
            <li>index 0: <?php echo $data [0] ?></li>
            <li>index 1: <?php echo $data [1] ?></li>
            <li>index 2: <?php echo $data [2] ?></li>
            <?php  endforeach; ?>
    </ul> 

    <?php echo $dataPerson[0]['nama']; ?>

    <?php foreach($dataPerson as $data): ?>
        <ul style="margin-bottom: 24px;">
            <li>Nama: <?php echo $data['nama']; ?></li>
            <li>Kota: <?php echo $data['kota']; ?></li>
            <li>Baju: <?php echo $data['baju']; ?></li>
            <li>
                makanan_favorite:
                <ol>
                    <?php foreach($data['makanan_favorite'] as $makanan): ?>
                    <li><?php echo $makanan; ?></li>
                    <?php endforeach; ?>
                </ol>
            </li>
        </ul>
        <?php endforeach; ?>
</body>
</html>