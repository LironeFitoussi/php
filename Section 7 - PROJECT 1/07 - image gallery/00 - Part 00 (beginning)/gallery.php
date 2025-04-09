<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>
<?php include './views/header.php'; ?>

<?php var_dump($imageTitles); ?>

<?php foreach ($imageTitles as $key => $value): ?>
    <figure>
        <figcaption>
            <a href="image.php?<?php echo http_build_query(["img" => $value])?>">
                <?php echo $value?>
            </a>
        </figcaption>
        <img style="max-width: 20rem" src="<?php echo rawurldecode("images/{$key}")?>" alt="<?php echo $value?>">
    </figure>
<?php endforeach ?>

<?php include './views/footer.php'; ?>
