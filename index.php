<?php
    //ini single 
    // gunakan\n untuk enter diterminal
    //gunakan <br/> untuk di browser
    # ini single komentar juga

    /**
     * ini komentar line 1
     * ini komrntar line 2
     */
    // ini untuk menampilkan string
    echo "faiz fauzan munadi" ." (menggunakan echo)\n";

    // cara kedua
    print "faiz fauzan munadi" . " (menggunakan print)";

    // print_r adalah fungsi build-in dari php
    // cara ketiga bisa digunakan untuk menampilkan data string, array, dsb
    print_r("faiz fauzan munadi" . " (menggunakan print_r)");

    // var dump adalah fungsi build_in dari php
    // cara ketiga khusus untuk analisa data / untuk programer
    var_dump("faiz fauzan munadi" ." (menggunakan var_dump)");
    echo "<br/>";

    $string1 = "faiz fm";
    $string2 = "menggunakan variabel terpisah";

    echo $string1 . ' ' . $string2;

    echo "<br/>";
    echo 12 + 8 . "\n"; //integer (better for use)
    echo "12"+ 8; //string
    // secara default string di convert ke int oleh php (not)

    "<br/>";

    $x = 5;
    $y = 10;

    $hasil = $x * $y;
    echo "hasil kali 5 x 10 = " . $hasil . "\n" ;

    echo "hasil kali " . $x ."x" . $y . "=" . $hasil . "\n";


    //yg lain
    "<br/>" ;

    echo 25 + 5;
    echo "\n";
    echo 25 - 5;
    echo "\n";
    echo 25 * 5;
    echo "\n";
    echo 25 / 5;
    echo "\n";
    echo 25 % 5; //modulus untuk mencari nilai akhir apakah ada sisa atau tidak

    "<br/>" ;

    $a = "<div>";
    $a .= "<h3> faizfm </h3>" ;
    $a .= "<p>(gunakan . untuk menggabungkan)</p>";
    $a .= "<p> sambungan lagi</p>";
    $a .= "</div>";

    echo $a;


    "<br/>";
    //boolean true / false || 1 / 0

    var_dump(1 == "1"); // true karena hanya membandingkan value
    var_dump(1 === "1"); // false karena membandingkan juga tipe datanya

    "<br/>";
    /** operator logika 
     * && (and)
     * || (or)
     * ! (not)
     * > (more than)
     * < (less than)
     * == (equal)
     * >= (more than or equal)
     * <= (less than or equal)
     * != (not equal)
     */

    $umur = 17;
    var_dump($umur > 20 && $umur >= 16);

    $nama = "T.G";
    var_dump($nama == "TG");

    "<br/>";

    $nama = "faizfm";
    $umur = "23";
    $birhtday = "30-07-2001";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>coba php</title>
    </head>
    <body>
        <ul>
        <li>Nama : <?php echo $nama ; ?> </li>
        <li>Umur : <?php echo $umur ; ?></li>
        <li>Tanggal Lahir : <?php echo $birhtday ; ?></li>
        <li> 5 x 5 adalah <?php echo 5 * 5; ?></li>
        </ul>
        
    </body>
    </html>
