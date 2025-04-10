

<?php
// Dummy Data Provided
// -----------------------------
$totalEnergyConsumption = 50000;
$monthlyIncrease = 200;
$efficiencyImprovement = 0.001;
$years = 5;
// -----------------------------

$totalMonths = $years * 12;

for ($i = 0; $i < $totalMonths; $i++) {
    $totalEnergyConsumption += $monthlyIncrease;
    $totalEnergyConsumption *= (1 - $efficiencyImprovement);
}

$forecastedEnergyConsumption = number_format($totalEnergyConsumption, 2, '.', '');

// var_dump($forecastedEnergyConsumption);