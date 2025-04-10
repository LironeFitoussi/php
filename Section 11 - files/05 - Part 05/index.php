<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Automatic Image List</h1>
    </header>
    <main>
        <pre><?php
                // var_dump(pathinfo('index.php')['extension']);
                // var_dump(PATHINFO_EXTENSION);
                var_dump(pathinfo('index.php', PATHINFO_EXTENSION));

                $handle = opendir(__DIR__ . '/images');

                $images = [];
                $allowedExtensions = [
                    'jpg',
                    'jpeg',
                    'png'
                ];
                while (($currentFile = readdir($handle)) !== false) {
                    $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
                    $filename = pathinfo($currentFile, PATHINFO_FILENAME);

                    if ($currentFile[0] === '.' || !in_array($extension, $allowedExtensions)) {
                        continue;
                    }

                    $textFilePath = __DIR__ . "/images/{$filename}.txt";
                    $fileContents = @file_get_contents($textFilePath);
                    $lines = $fileContents ? explode("\n", $fileContents, 2) : [];

                    $images[$filename] = [
                        'file' => $currentFile,
                        'title' => $lines[0] ?? 'No title available',
                        'description' => $lines[1] ?? 'No description available'
                    ];
                }
                // var_dump($images);
                closedir($handle);
                ?></pre>

        <?php foreach ($images as $filename => $imageData): ?>
            <figure>
                <img src="images/<?php echo rawurlencode($imageData['file']); ?>" alt="<?php echo htmlspecialchars($imageData['title']); ?>" />
                <figcaption>
                    <h3><?php echo htmlspecialchars($imageData['title']); ?></h3><br>
                    <p>
                        <?php echo nl2br(htmlspecialchars($imageData['description'])); ?>
                    </p>
                </figcaption>
            </figure>
        <?php endforeach; ?>

    </main>
</body>

</html>