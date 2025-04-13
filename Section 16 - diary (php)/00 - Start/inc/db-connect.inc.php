<?php
    $servername = "localhost";
    $username = "root";
    $password = "baba1234";
    $dbname = "diary";
    $socket = "/tmp/mysql.sock";

    // Create connection
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;unix_socket=$socket", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
?>