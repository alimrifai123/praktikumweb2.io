<?php

// buat array
$animals = ['kucing','kerbau','lalat','ayam'];
echo $animals[3] . "<br>";
echo $animals[0] . "<br>";

foreach ($animals as $animal){
    echo $animal . "<br>";
}

// buat array associatif
$mahasiswa = ['nama'=>'alim','jurusan'=>'si','semester'=>'genap'];
echo $mahasiswa['jurusan'] . '<br>';

foreach ($mahasiswa as $key=>$value) {
    echo 'key nya adalah' . $key . 'value' . $value . "<br>";
}

// buat array multifungsi
$dosen = [
    ('pak rojul','web');
    ('pak nasrul','ddp');
    ('pak lukman','os')
];
// 00 01 02 03
echo $dosen[0][0];
?>