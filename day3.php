<?php
    function jarak($n) {
        if ($n >= 0) {
            echo str_repeat("<br/>",$n);
        } else {
            echo "<br/>";
        }
    }
    //array tipe data
    echo "Tipe Data Array";
    jarak(2);
    $ap = ["apa", "coba", "cik"];
    var_dump($ap);
    jarak(1);

    //integer tipe data
    echo "___Tipe Data___";
    jarak(1);
    $x = 1945;
    $y = 0127;
    $z = 0x1B;
    var_dump($x);
    jarak(1);
    var_dump($y);
    jarak(1);
    var_dump($z);
    jarak(1);


    // float tipe data
    echo "Float";
    jarak(1);
    $a = 5.324;
    $b = 3.2e4;
    $c = 4E-10;

    var_dump($a);
    jarak(1);
    var_dump($b);
    jarak(1);
    var_dump($c);
    jarak(1);


    // Boolean tipe data
    $menang = true;

    if ($menang == true){
        echo "bernilai benar";
    } else {
        echo "bernilai salah";
    }
?>
