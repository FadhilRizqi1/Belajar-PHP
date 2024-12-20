<?php
//Array

// $hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
// $bulan = ["Januari","Februari","Maret"];
// $arr1 = [123, "tulisan",false];

// //Menampilkan array debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// //Menampilkan array
// echo $arr1[1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width : 30px;
            height : 30px;
            background-color : orange;
            text-align : center;
            line-height : 30px;
            margin : 3px;
            float : left;
            transition : 1s;
        }

        .kotak:hover {
            transform : rotate(360deg);
            border-radius : 50%;
        }

        .clear {clear: both;}

    </style>
</head>
<body>
    <?php
$angka = [[1,2,3],
          [4,5,6],
          [7,8,9]
        ];
    ?>

    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
            <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>