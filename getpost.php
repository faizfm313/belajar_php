<?php
//$_get & $_post adalah variable super global
// variable ini membawa banyak data yang terlebih di aplikasi

//$_GET passing data melalui URL
//$_GET["nama"] = "faizfm";
//$_GET["alamat"] = "jakarta";
//var_dump($_GET);

$arr = [
    [
        "nama" => "faizfm",
        "kota" => "jakarta",
        "no_telp" => "8898523523",
    ],
    [
        "nama" => "faix",
        "kota" => "bandung",
        "no_telp" => "889452353",
    ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($arr as $person): ?>
            <li>
                <a href="./get.php?nama=<?= $person['nama']?>&kota=<?= $person['kota']?>&no_telp=<?= $person['no_telp']?>">
                    <?= $person['nama']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr/>

    <form action="" method="POST">
        <input type="text"
        name="txt_username"
        placeholder="username"/>

        <input type="password"
        name="txt_password"
        placeholder="password"/>

        <button type="submit">submit</button>
    </form>

    <?php if(isset($_POST['txt_username'])): ?>
    <h3>Hallo bro, <?php echo $_POST['txt_username'] ?>
    </h3>
    <?php endif; ?>
</body>
</html>