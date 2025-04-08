<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
</head>

<body>
    <pre>
        <?php
        $hrSalaries = ['Alice' => 5000, 'Bob' => 4800, 'Charlie' => 5500];
        $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
        $itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];

        $companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);

        $minSal = min($companySalaries);
        $lowestSalaries = [];
        foreach ($companySalaries as $emp => $sal) {
            // A. extract vlaues
            if ($sal === $minSal) {
                // echo "Equal Sal\n";
                // $deps = ['HR' => $hrSalaries, 'Sales' => $salesSalaries, 'IT' => $itSalaries];
                // foreach ($deps as $dep => $loc) {
                    // echo $dep . "\n";
                    // echo $emp . "\n";
                    // var_dump($loc);

                    // if (in_array($emp, array_keys($loc))) {
                        $lowestSalaries[$emp] = $sal;
                    // }
                }
            // }
        };
        var_dump($lowestSalaries)
        ?>
    </pre>
</body>

</html>