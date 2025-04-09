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
            // $courses = [
            //     'German for Beginners',
            //     'French for Beginners',
            //     'Spanish for Beginners'
            // ];

            // $coursesDescriptions = [
            //     'Learn the fundamentals of German, including vocabulary and grammar, to start speaking confidently.',
            //     'Explore the basics of French with practical exercises and cultural insights.',
            //     'Master essential Spanish phrases and grammar for everyday conversations.'
            // ];

            // $coursesFlags = [
            //     '🇩🇪',
            //     '🇫🇷',
            //     '🇪🇸'
            // ];

            $courses = [
                [
                    'title' => 'German for Beginners',
                    'description' => 'Learn the fundamentals of German, including vocabulary and grammar, to start speaking confidently.',
                    'flag' => '🇩🇪'
                ],
                [
                    'title' => 'French for Beginners',
                    'description' => 'Explore the basics of French with practical exercises and cultural insights.',
                    'flag' => '🇫🇷'
                ],
                [
                    'title' => 'Spanish for Beginners',
                    'description' => 'Master essential Spanish phrases and grammar for everyday conversations.',
                    'flag' => '🇪🇸'
                ]
            ];

            // var_dump($courses[1]["title"]);
            // var_dump($courses[1]["flag"]);
            // var_dump($courses[2]["title"]);
            // var_dump($courses[2]["flag"]);

            $spanishCourse = $courses[2];

            var_dump($spanishCourse['title']);
            ?></pre>
</body>

</html>