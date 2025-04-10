<?php


function query($query) {
    $pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock', 'root', 'baba1234', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

var_dump(query('SELECT * FROM `notes123`'));