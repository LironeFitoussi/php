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
            $name = "Lirone";
            $subject = "PHP";
            $greeting = "I'm {$name} and I'm Learning {$subject}";
            echo "{$greeting}";

            echo "\n";
            echo "\t-";
            ?></pre>
    <p>
        A first line of text. <?php echo '<br>'; ?> A second line og text
    </p>
    <p>
        A first line of text. <?php echo "\n" ?> A second line og text
    </p>

    <p>
        <?php echo 'My last echo $abc'; ?> 
        <?php echo "My last echo {$abc}"; ?> 
    </p>
</body>

</html>