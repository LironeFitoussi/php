<?php
require __DIR__ . '/inc/db-connect.inc.php';
require __DIR__ . '/inc/functions.inc.php';

date_default_timezone_set('Asia/Jerusalem');

global $query;
$perPage = 2;
$page = $_GET['page'] ?? 1;
$totalEntries = ceil(query('SELECT COUNT(*) AS count FROM entries', [])[0]['count']);
if ($page <= 0 || $page > $totalEntries / $perPage) {
    $page = 1;
}
$offset = $page - 1;
$entries = query('SELECT * FROM entries ORDER BY `date` DESC , `id` DESC LIMIT :perPage OFFSET :offset', ["perPage" => $perPage, "offset" => $offset * $perPage]);
?>
<?php require __DIR__ . '/views/header.inc.php'; ?>
<h1 class="main-heading">Entries</h1>
<?php foreach ($entries as $card): ?>
    <div class="card">
        <div class="card__image-container">
            <img class="card__image" src="images/pexels-canva-studio-3153199.jpg" alt="" />
        </div>
        <div class="card__desc-container">
            <?php 
                $dateExploded = explode("-", $card['date']);
                var_dump($dateExploded);
                $timestamp = mktime(12, 0, 0, $dateExploded[1], $dateExploded[2], $dateExploded[0]);
                var_dump($timestamp);
            ?>
            <div class="card__desc-time"><?= date('m/d/y', $timestamp) ?></div>
            <h2 class="card__heading"><?= e($card["title"]) ?></h2>
            <p class="card__paragraph">
                <?= e($card["message"]) ?>
            </p>
        </div>
    </div>
<?php endforeach ?>


<ul class="pagination">
    <?php if ($page > 1): ?>
        <li class="pagination__li">
            <a class="pagination__link" href="index.php?page=<?= $page - 1 ?>">⏴</a>
        </li>
    <?php endif; ?>
    <?php for ($i = 0; $i < $totalEntries / 2; $i++): ?>
        <li class="pagination__li">
            <a class="pagination__link <?= $offset === $i ? "pagination__link--active" : "" ?>" href="index.php?page=<?= $i + 1 ?>"><?= $i + 1 ?></a>
        </li>
    <?php endfor ?>
    <?php if ($page < ceil($totalEntries / $perPage)): ?>
        <li class="pagination__li">
            <a class="pagination__link" href="index.php?page=<?= $page + 1 ?>">⏵</a>
        </li>
    <?php endif; ?>
</ul>

<?php require __DIR__ . '/views/footer.inc.php'; ?>