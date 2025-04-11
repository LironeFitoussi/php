<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock', 'root', 'fds f sdf ', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    //throw $th;
    echo "A database error occurred. Please try again later. \n ";
    var_dump($e->getMessage());
    die();
}



/*
$stmt = $pdo->prepare('UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id');
$stmt->bindValue('id', 14);
$stmt->bindValue('content', 'CONTENT (from PHP)');
$stmt->bindValue('title', 'TITLE (from PHP)');
$stmt->execute();

$id = 11;
$stmt2 = $pdo->prepare('DELETE FROM `notes` WHERE `id` = :id');
$stmt2->bindValue('id', $id);
$stmt2->execute();

$title = 'A title...';
$stmt3 = $pdo->prepare('DELETE FROM `notes` WHERE `title` = :title');
$stmt3->bindValue('title', $title);
$stmt3->execute();
*/