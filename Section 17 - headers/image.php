<?php
    header('Content-Type: image/jpeg');
    if (rand(1, 2) === 1) {
        readfile(__DIR__ . '/images/IMG_0294.jpg');
    } else {
        readfile(__DIR__ . '/images/IMG_0933.jpg');
    };
    // echo file_get_contents(__DIR__ . '/images/IMG_0294.jpg');
?>