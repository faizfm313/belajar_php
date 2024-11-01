<?php
    //cara lama
    $arr1 = array("senin", "selasa", "rabu");

    //cara baru
    $arr2 =["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];

    // echo hanya bekerja untuk string / int
    // khusus debugging  / developer
    //var_dump() / print_r
    // var_dump($arr2);
    // echo "</br>";
    // print_r($arr2);
    // echo "</br>";
    // echo $arr2[2];

    for($i = 0; $i < count($arr2); $i++){
        echo $arr2[$i] . "<br/>";
    }
echo "<hr/>";
    // cara2
    foreach($arr2 as $hari){
        echo $hari . "<br/>";
    }
    
?>