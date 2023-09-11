<?php
echo $str = <<<DEMO
This is a\n
demo message
with heredoc.
DEMO;

$nama = "Azrian";
$Umur = "16";

echo nl2br("\n\nBiodata\n");
echo nl2br("Nama: $nama\n");
echo nl2br("Umur: $Umur");

?>