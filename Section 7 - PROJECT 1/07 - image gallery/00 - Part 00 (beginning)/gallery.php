<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php var_dump($imageTitles); ?>

<?php foreach ($imageTitles as $key => $value): ?>
    <figure>
        <figcaption><?php echo $value?></figcaption>
        <img src="<?php echo $key?>" alt="<?php echo $value?>">
    </figure>
<?php endforeach ?>

<?php include './views/footer.php'; ?>
