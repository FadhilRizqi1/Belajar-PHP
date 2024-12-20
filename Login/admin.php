<?php

if (!isset($_GET["username"])) {
    header("Location: login.php");  
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Selamat Datang <?= $_GET["username"]; ?></h1>

    <a href="login.php">Logout</a>
</body>

</html>