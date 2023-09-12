<?php
    function jarak($n) {
        if ($n >= 0) {
            echo str_repeat("<br/>",$n);
        } else {
            echo "<br/>";
        }
    }

    //array tipe data
    echo "__Array__";
    $ar = ["apa", "coba", "cik"];
    var_dump($ar);
    jarak(2);

     //object tipe data
    class hello {
        var $c;
    }
    $pesan = new hello() ;
    $pesan ->c = "apa cik";
    echo $pesan ->c;
    jarak(2);

    //null tipe data
    $t = null;
    var_dump($t);
    echo $t;


?>
