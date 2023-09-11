<?php
    echo "Tipe Data Array";
    echo "<br/>";
    $ap = ["apa", "coba", "cik"];
    var_dump($ap);
    echo "<br/>";

    echo "___Tipe Data___";
    echo "<br/>";
    $x = 1945;
    $y = 0127;
    $z = 0x1B;
    var_dump($x);
    echo "<br/>";
    var_dump($y);
    echo "<br/>";
    var_dump($z);
    echo "<br/>";

    echo "Float";
    echo"<br/>";
    $a = 5.324;
    $b = 3.2e4;
    $c = 4E-10;

    var_dump($a);
    echo "<br/>";
    var_dump($b);
    echo "<br/>";
    var_dump($c);
    echo "<br/>";

    $menang = true;

    if ($menang == true){
        echo "bernilai benar";
    } else {
        echo "bernilai salah";
    }
?>