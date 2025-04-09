<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>

<body>
    <pre><?php

            if (isset($_GET['price']) && $_GET['price'] > 0) {
                $price = (int) $_GET['price'];
                var_dump($price);
                var_dump($price * 1.19);
            }


            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                if (is_array($name)) {
                    foreach ($name as $persone) {
                        var_dump($persone);
                    }
                }else {
                    var_dump($name);
                    // var_dump($name . "!!!");
                }
            }

            ?></pre>
            <a href="types.php?<?php echo http_build_query(['name' => ["Lirone", "Eden", "Eythan"]]) ?>">Get us</a>
            <a href="types.php?<?php echo http_build_query(['name' => "Lirone"]) ?>">Get me</a>
</body>

</html>

<!-- /types.php?price=50 -->