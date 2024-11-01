<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
    <?php
        //pengulangan
        for($i = 0; $i < 5; $i++){
            echo "<p>ini pengulangan ke " . $i . "</p>";
        }
    ?>
    <hr/>
    <?php
     //pengulangan while
        $a = 0;
        while($a < 5){
            echo"<p>ini pengulangan ke " . $a . "</p>";
            $a++;
        }
    ?>
    <hr/>
    <?php
    //pengulangan do while
    $b = 6;
    do{
        echo"<p>ini pengulangan ke " . $b . "</p>";
        $b++;
    }while($b < 5);
    ?>
        
</body>
</html>