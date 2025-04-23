<?php 
    require __DIR__ . '/../inc/names.inc.php';

    $char = (string) ($_GET['char'] ?? '');

    $char = strtoupper($char);
    

    $names = fetch_names_by_initial($char, $pdo);

?><ul>
    <?php foreach ($names as $name): ?>
        <li>
            <a href="index.php?<?= http_build_query(['name' => e($name)]) ?>"><?= e($name) ?></a>
        </li>
    <?php endforeach; ?>
</ul>