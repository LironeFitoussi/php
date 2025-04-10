<?php
$pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock', 'root', 'baba1234', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

var_dump($pdo);