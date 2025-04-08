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
        // Your PHP code goes here
        $hrSalaries = ['Alice' => 5000, 'Bob' => 4800, 'Charlie' => 5500];
        $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
        $itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];

        $companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);


        $totalSalaries = array_sum(array_values($companySalaries));
        // echo $totalSalaries;
        $totalEmployes = count($companySalaries);

        $averageSalary = $totalSalaries / $totalEmployes;
        // echo $averageSalary;
        // var_dump($companySalaries);
        foreach ($companySalaries as $employee => $salary) {
            if ($salary < $averageSalary) {
                $companySalaries[$employee] += 200;
            } else if ($salary > $averageSalary){
                $companySalaries[$employee] *= 0.95;
            };
        }

        // var_dump($companySalaries);
        $salariesAfter = array_sum(array_values($companySalaries));
        // echo $salariesAfter;
        // Increase
        $impact = $salariesAfter - $totalSalaries;
        if ($impact >= 0) {
            echo "The net impact of the salary adjustments is a cost increase of \${$impact} for the company.";
        } else {
            $impact *= -1;
            echo "The net impact of the salary adjustments is a savings of \${$impact} for the company.";
        };
        ?>
    </pre>
</body>

</html>