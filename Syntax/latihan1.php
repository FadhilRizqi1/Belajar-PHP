<?php
// Sytax dasar PHP

// Standar Output
    // echo"Hello World";
    // echo 12345;
    // echo true;
    // echo false;
    // var_dump(12345);
    

// variabel 

    // Deklarasi Variabel
    // Nilai awal variabel
    // $nama = "Fadhil";
    // $nama1 = "Rizqi";

    // Deklarasi Variabel
    // Nilai awal variabel
    $x = 10;
    $y = 20;

// Aritmatika

    // // Penjumlahan
    // echo $x + $y;

    // // Pengurangan
    // echo $x - $y;

    // // Perkalian
    // echo $x * $y;

    // // Pembagian
    // echo $x / $y;

    //Assignment
    // $x = 10;
    // // $x += 5;
    // // $x -= 5;
    // // $x *= 5;
    // // $x /= 5;
    // // $x %= 5;
    // // echo $x;

    // $nama = "Ahmad" . " " . "Fadhil";
    // $nama .= " ";
    // $nama .= "Fadhil";
    // $nama .= " ";
    // $nama .="Rizqi";

    //Perbandigan nilai
    //<, >, <=, >=, ==, !=

    // var_dump (5 <1);
    // var_dump( 5 > 1);

    //Identitas (Tipe data) String, Int, dll
    //===, !==

    //Logika
    // &&(And), ||(Or), !(Not)

    var_dump($x < 5 && $x % 2== 0);
    var_dump($x < 5 || $x % 2== 0);
    var_dump(! ($x < 5 && $x % 2== 0));

?>


<!-- PHP dalam HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello 
        <?php echo $nama ?>
    </h1>
</body>
</html> -->