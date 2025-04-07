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
        $meaning = 42;
        echo $meaning * 2 . "\n";
        echo $meaning / 2 . "\n";
        echo $meaning + 2 . "\n";
        echo $meaning - 2 . "\n";
        
        // echo '5' + 'a6' ==> Warning: A non-numeric value encountered, this will cause a warning
        // echo '5' + '6' ==> 11, this will be converted to a number
        // echo round(3.33, 1)

        // $meaning = $meaning * 2;
        $meaning *= 2;
        $meaning /= 2;
        $meaning += 2;
        $meaning -= 2;
        echo $meaning;
        
    ?></pre>
</body>
</html>