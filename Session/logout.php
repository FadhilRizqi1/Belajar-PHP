<?php

session_start();

//menghapus session
session_unset();
session_destroy();

//mengalihkan halaman ke halaman login
header("Location: login.php");

?>