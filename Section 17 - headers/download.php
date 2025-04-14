<?php
// Set headers to force download
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename="image.jpg"');

// Check if the file exists
readfile(__DIR__ . '/images/IMG_0294.jpg');

?>
