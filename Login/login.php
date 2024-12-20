<?php

    //cek apakah tombol submit sudah ditekan
    if( isset($_POST["submit"])) {
    //cek usernme dan password
    if ( $_POST["username"] == "BigL" && $_POST["password"] == "123") {
    //jika benar, redirect ke halaman admin
    header("Location: admin.php?username=" . $_POST["username"]);
    exit;
    } else {
    //jika salah, redirect pesan kesalahan
    $error = true;
 }
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

    <h1>Login Admin</h1>

    <?php if (isset ($error)) : ?>
    <p style="color: red;" font-style: italic>username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">
                    Username :
                </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">
                    Password :
                    <input type="password" name="password" id="password">
                </label>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

</body>

</html>