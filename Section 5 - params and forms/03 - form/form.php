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
            var_dump($_GET);
            ?></pre>

    <?php if (!empty($_GET['book'])): ?>
        <h1><?php echo $_GET['book']; ?></h1>
    <?php endif; ?>

    <form action="form.php" method="GET">
        <input type="text" name="book" value="<?php if (!empty($_GET['book'])) echo $_GET['book']; ?>" />
        <input type="submit" value="Submit!" />
    </form>

    <form action="">
        <?php
        $cars = ['volvo' => 'Volvo', 'saab' => 'Saab', 'mercedes' => 'Mercedes', 'audi' => 'Audi'];
        ?>
        <select name="cars">
            <?php foreach ($cars as $value => $label): ?>
                <option value="<?php echo $value; ?>" <?php if (!empty($_GET['cars']) && $_GET['cars'] === $value) echo 'selected'; ?>>
                    <?php echo $label; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit!" /> 
    </form>


</body>

</html>