<?php
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["jurusan"]) || !isset($_GET["email"]) || !isset($_GET["gambar"])) {
    header("latihan2.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><img src="../img/<?= $mhs["gambar"] ?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nim"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
        <li><?= $_GET["email"] ?></li>
    </ul>
</body>

</html>