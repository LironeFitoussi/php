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
        $hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
        $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
        $itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];
        
        // Your PHP code goes here
        $totals = [];
        foreach ([$hrSalaries, $salesSalaries, $itSalaries] as $key => $dep) {
            // A. extract vlaues
            $deps = ['HR', 'Sales', 'IT'];
            $totals[$deps[$key]] = array_sum(array_values($dep));
        };
         var_dump($totals);

        var_dump(max(array_values($totals)));
        $maxDept = array_search(max(array_values($totals)), $totals);
    ?>
    </pre>
</body>
</html>