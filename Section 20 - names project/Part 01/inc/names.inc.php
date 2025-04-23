<?php

declare(strict_types=1);

function fetch_names_by_initial(string $char): array
{
    global $pdo;
    if (strlen($char) > 1) {
        $char = $char[0];
    }
    $stmt = $pdo->prepare('SELECT DISTINCT name FROM names WHERE name LIKE :name ORDER BY name');
    $stmt->bindValue(':name', $char . '%');
    $stmt->execute();
    // $names = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $names = [];
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $names[] = $row["name"];
    };
    return $names;
};
