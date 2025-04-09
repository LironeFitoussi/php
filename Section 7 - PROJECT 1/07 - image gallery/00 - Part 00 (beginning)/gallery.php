<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>
<?php include './views/header.php'; ?>

<?php foreach ($imageTitles as $key => $value): ?>
    <a href="image.php?<?php echo http_build_query(["img" => $key]) ?>">        
        <h3><?php echo e($value) ?></h3>
        <img src="<?php echo rawurldecode("./images/{$key}") ?>" alt="<?php echo $value ?>">
    </a>
<?php endforeach ?>

<?php include './views/footer.php'; ?>