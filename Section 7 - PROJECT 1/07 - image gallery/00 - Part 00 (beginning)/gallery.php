<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>

<?php include './views/header.php'; ?>

<div class="gallery-container">
    <?php foreach ($imageTitles as $key => $value): ?>
        <a href="image.php?<?php echo http_build_query(["img" => $key]) ?>" class="gallery-item">
            <h3><?php echo e($value) ?></h3>
            <img src="<?php echo rawurldecode("./images/{$key}") ?>" alt="<?php echo $value ?>">
        </a>
    <?php endforeach ?>
</div>

<?php include './views/footer.php'; ?>