<?php
require __DIR__ . '/db-connect.inc.php';
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function query(string $query, array $binder): array
{
    global $pdo;
    $stmt = $pdo->prepare($query);

    foreach ($binder as $key => $value) {
        // var_dump($key);
        $stmt->bindValue(":" . $key, $value, is_int((int)$value) ? PDO::PARAM_INT : PDO::PARAM_STR);
    }
    // echo $stmt->queryString;

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
