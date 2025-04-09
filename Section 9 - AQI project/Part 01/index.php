<?php
require __DIR__ . '/inc/functions.inc.php';

$cities = json_decode(file_get_contents(__DIR__ . '/../data/index.json'), true);
// var_dump($cities);
?>

<?php
require __DIR__ . '/views/header.inc.php';
?>

<ul>
    <?php foreach ($cities as $city): ?>
        <li>
            <a href="city.php?<?= http_build_query(['city' => $city['city']])?>">
                <?= e($city['flag']) ?>
                <?= e($city['city']) ?>,
                <?= e($city['country']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<?php
require __DIR__ . '/views/footer.inc.php';
?>