<?php
//looping foreach
echo "lagu anak angsa. <br>";
$jumlah = 210;
$setengah = $jumlah / 2;
$data = range($jumlah, 1);
foreach ($data as $a) {
    echo "tek kotek kotek kotek anak angsa turun berkotek, anak angsa turunlah $a <br>";
    
    $sisa = $a - 1;
    if ($sisa > 0) {
        echo "mati satu tinggallah $sisa <br>";
    } else {
        echo "mati satu tinggallah induknya <br>";
    }

    if ($a == $setengah){
        echo "induk angsa berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
}
?>