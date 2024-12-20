<?php
// $mahasiswa = [ 
//     ["Ahmad", "09031282328058", "Sistem Informasi", "fadhilrizqi@gmail.com"],
//     ["Fadhil", "09031282328058", "Sistem Informasi", "fadhilrizqi@gmail.com"],
//     ["Rizqi", "09031282328058", "Sistem Informasi", "fadhilrizqi@gmail.com"],
// ]

//Array associative
$mahasiswa = [
            [
            "nama" => "Ahmad", 
            "nim" => "09031282328058", 
            "jurusan" => "Sistem Informasi", 
            "email" => "fadhilrizqi@gmail.com",
            "gambar" => "Face F.jpg"],
    
            [
            "nama" => "Fadhil", 
            "nim" => "09031282328058", 
            "jurusan" => "Sistem Informasi", 
            "email" => "fadhilrizqi@gmail.com",
            "gambar" => "Face F1.jpg"],

            [
            "nama" => "Rizqi", 
            "nim" => "09031282328058", 
            "jurusan" => "Sistem Informasi", 
            "email" => "fadhilrizqi@gmail.com",
            "gambar" => "Face F2.jpg"],
            ];
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    img{
        width: 120px;}
    </style>

</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    
    <ul>
        <li><img src="../img/<?= $mhs["gambar"] ?>"></li>
        <li><?= $mhs["nama"] ?></li>
        <li><?= $mhs["nim"] ?></li>
        <li><?= $mhs["jurusan"] ?></li>
        <li><?= $mhs["email"] ?></li>
    </ul>

    <?php endforeach; ?>
</body>
</html>