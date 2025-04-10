<pre>

    <?php

    // Special PHP Build-in
    $zip = new ZipArchive();
    echo "\n--------\n";
    $zip->open(__DIR__ . '/Archive.zip');
    echo "\n--------\n";
    var_dump($zip);
    echo "\n--------\n";
    $numFiles = $zip->count();
    for ($i = 0; $i < $numFiles; $i++) {
        var_dump($zip->getNameIndex($i));
    }
    
    var_dump($zip->getFromName('message.txt'));
    $zip->close();
    ?>
</pre>