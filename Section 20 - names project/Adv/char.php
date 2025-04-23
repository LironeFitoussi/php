<?php

require __DIR__ . '/inc/all.inc.php';

$char = (string) ($_GET['char'] ?? '');
$char = strtoupper($char);
$alphabet = range('A', 'Z');

if (strlen($char) > 1) {
    $char = $char[0];
};

if (strlen($char) === 0 || !in_array($char, $alphabet)) {
    header("Location: index.php");
    die();
};


$page = (int) ($_GET['page'] ?? 1);
if ($page < 1) {
    $page = 1;
}

$perPage = 15;

$names = fetch_names_by_initial($char, $page, $perPage);
$totalNames = fetch_char_count($char);
$totalPages = ceil($totalNames / $perPage);


render('char.view', [
    'char' => $char,
    'names' => $names,
    'page' => $page,
    'perPage' => $perPage,
    'totalPages' => $totalPages,
]);
?>
