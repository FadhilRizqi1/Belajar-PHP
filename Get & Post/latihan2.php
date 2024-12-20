<?php
//SUPERGLOBALS
//variable global dari PHP
//Merupakan array associative

// echo $_SERVER["SERVER_NAME"];
// $_GET["nama"] = "Fadhil";
// $_GET["NIM"] = "09031282328058";
$mahasiswa = [
    [
        "nama" => "Ahmad",
        "nim" => "09031282328058",
        "jurusan" => "Sistem Informasi",
        "email" => "fadhilrizqi@gmail.com",
        "gambar" => "Face F.jpg"
    ],

    [
        "nama" => "Fadhil",
        "nim" => "09031284578382328058",
        "jurusan" => "Sistem Informasi",
        "email" => "fadhilrizqi@gmail.com",
        "gambar" => "Face F1.jpg"
    ],

    [
        "nama" => "Rizqi",
        "nim" => "0903128232805875848",
        "jurusan" => "Sistem Informasi",
        "email" => "fadhilrizqi@gmail.com",
        "gambar" => "Face F2.jpg"
    ],
];

var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    img {
        width: 100px;
    }
    </style>

</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <a
                href="latihan3.php? nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?></a>
        </li>
    </ul>

    <?php endforeach; ?>

</body>

</html>