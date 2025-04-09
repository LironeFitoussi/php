<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

$image = $_GET["img"];
if (empty($image) || !in_array($image, array_keys($imageTitles))) {
    $url = "https://404.com";
    header('Location: ' . $url);
    die();
}
?>
<?php include './views/header.php'; ?>

<h2><?php echo e($imageTitles[$image]) ?></h2>
<img src="./images/<?php echo rawurldecode($image); ?>">
<p><?php echo str_replace("\n", "<br />",  e($imageDescriptions[$image])) ?></p>

<a href="gallery.php">Back to gallery</a>
<?php include './views/footer.php'; ?>