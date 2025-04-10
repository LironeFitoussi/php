<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./simple.css" />
</head>

<body>
    <pre><?php
            for ($i = 0; $i < 10; $i++) {
                var_dump($i);
            }
            ?></pre>

    <ul>
        <?php for ($number = 0; $number <= 100; $number++): ?>
            <?php if ($number % 2 !== 0 || $number === 0) continue; ?>
            <li>
                <?= $number ?>
            </li>
        <?php endfor ?>
    </ul>
</body>

</html>