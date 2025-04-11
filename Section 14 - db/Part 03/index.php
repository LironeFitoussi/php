<?php
function e($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function query($query, $binder)
{
    $pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock', 'root', 'baba1234', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->prepare($query);
    foreach ($binder as $key => $value) {
        $stmt->bindValue($key, $value);
    }
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$title = "NEW Title";
$content = "NEW Content";
$id = $_GET["id"];
// $results = query("SELECT * FROM `notes` WHERE `id` = :id", ["id" => $_GET["id"]]);
// $results = query("INSERT INTO `notes` (`title`,`content`) VALUES (:title, :content)", ["title" => $title, "content" => $content]);
// $results = query("UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id", ["title" => $title, "content" => $content, "id" => $id]);
$results = query("DELETE FROM `notes` WHERE `id` = :id", ["id" => $id]);
?>


<!-- <ul>
    <?php foreach ($results as $res): ?>
        <li>
            <?= e($res['title']); ?>
        </li>
    <?php endforeach ?>
</ul> -->