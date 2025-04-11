<?php

function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function query($query, $binders)
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock;charset=utf8mb4', 'root', 'baba1234', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->prepare($query);
        foreach ($binders as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "A database error occurred. Please try again later. \n";
        var_dump($e->getMessage());
        die();
    }
}
$title = "✅";
$content = "✅";
// $id = $_GET["id"];

$results = query("INSERT INTO `notes` (`title`,`content`) VALUES (:title, :content)", ["title" => $title, "content" => $content]);

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