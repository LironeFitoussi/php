<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

var_dump(__FILE__);
include dirname(__FILE__) . '/inc/a.php';
// include __DIR__ . '/inc/a.php';
include __DIR__ . '/pages/file.php';
?></pre>
</body>
</html>