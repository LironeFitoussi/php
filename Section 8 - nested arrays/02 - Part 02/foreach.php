<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css"/>
    <title>Document</title>
</head>
<body><pre><?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$courses = [
    [
        'title' => 'German for Beginners',
        'desc' => 'Learn basic German vocabulary, grammar, and everyday phrases.',
        'flag' => '🇩🇪'
    ],
    [
        'title' => 'French for Beginners',
        'desc' => 'Master fundamental French skills including basic vocabulary and conversational techniques.',
        'flag' => '🇫🇷'
    ],
    [
        'title' => 'Spanish for Beginners',
        'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversations.',
        'flag' => '🇪🇸'
    ]
];

// foreach ($courses as $course) {
//     var_dump($course['title']);
//     var_dump($course['desc']);
//     var_dump($course['flag']);
// }

foreach ($courses[2] as $value) {
    var_dump($value);
}

?></pre>

<?php foreach ($courses as $course):?>
    <details>
        <summary><?php echo  e($course['flag']) . " " . e($course['title'])?></summary>
        <p><?php echo e($course['desc'])?></p>
    </details>
<?php endforeach ?>
</body>
</html>