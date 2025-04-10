<?php

function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function query($query) {
    $pdo = new PDO('mysql:host=localhost;dbname=note_app;unix_socket=/tmp/mysql.sock', 'root', 'baba1234', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$results = query('SELECT * FROM `notes`');

?>


<ul>
    <?php foreach($results as $res): ?>
        <li>
            <?= e($res['title']);?>
        </li>
    <?php endforeach ?>
</ul>