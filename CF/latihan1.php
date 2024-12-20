<?php
//Pengulangan
// for
// while
// do.. while
// foreach : Pengulangan khusus array


//Perbedaan for, while, do.. while

for ($i = 1; $i <= 5; $i++) {
    echo "For Loop : Hello World <br>";
}

$i = 0;
while ( $i < 5 ) {
    echo "While Loop : Hello World <br>";
    $i++;
}

$i = 0;
do {   
    echo "Do... While Loop : Hello World <br>";
    $i++;
}

while ($i < 5);

//Perbedaannya adalah :
//for digunakan jika kita tahu berapa kali pengulangan akan terjadi
//while digunakan jika kita tidak tahu berapa kali pengulangan akan terjadi
//do.. while digunakan jika kita ingin pengulangan terjadi minimal 1 kali



?>