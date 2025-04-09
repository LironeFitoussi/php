<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php

/**
 * Retrieves the 'name' parameter from the GET request, or defaults to an empty string if not set.
 * 
 * - The null coalescing operator (??) is used to check if the 'name' key exists in the $_GET array.
 * - If the 'name' key is not set, an empty string is returned as the default value.
 * - The @(string) casting suppresses any potential warnings or errors during the type casting.
 * 
 * @var string $name The sanitized name parameter from the GET request or an empty string.
 */
$name = @(string) ($_GET['name'] ?? ''); 
// var_dump($name);
    
?></pre>
<a href="null-coalescing.php?<?php echo http_build_query(['name' => ['Jannis', 'Olivia']]); ?>">Link</a>
</body>
</html>