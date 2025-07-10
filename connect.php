<?php

    $user = 'root';
    $password = 'root';
    $db = 'catalog';
    $host = 'localhost';
    $port = 3306;

    $link = mysqli_connect($host, $user, $password, $db, $port);

    if (!$link) {
        die('Помилка підключення: ' . mysqli_connect_error());
    }
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>