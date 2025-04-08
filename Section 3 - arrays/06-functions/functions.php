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

            $names = [
                'William Miller',
                'Emily Johnson',
                'Michael Smith',
                'Sarah Williams',
                'James Brown',
                'Jennifer Davis',
                'William Miller',
                'William Miller',
                'William Miller',
            ];
            // var_dump($names);

            // Let's find duplicates
            $names = array_unique($names); // Creates a new array
            // var_dump($names);

            // Sorting
            sort($names); // Directly manipulates the original Data Structure
            var_dump($names);

            ?></pre>
</body>

</html>