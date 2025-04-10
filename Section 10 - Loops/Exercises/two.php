<?php
// Dummy Data Provided
// -----------------------------
$totalEnergyConsumption = 100000;
$monthlyIncrease = 500;
$efficiencyImprovement = 0.0005;
$energyCapacityThreshold = 150000;

$monthsPassed = 0;
$maxMonths = 50 * 12; // max 50 years

// -----------------------------

while ($monthsPassed < $maxMonths && $totalEnergyConsumption < $energyCapacityThreshold) {
    $totalEnergyConsumption += $monthlyIncrease;
    $totalEnergyConsumption *= (1 - $efficiencyImprovement);
    $monthsPassed++;
}

if ($energyCapacityThreshold <= $totalEnergyConsumption) {
    echo  "It will take $monthsPassed months to reach or exceed the threshold of $energyCapacityThreshold kWh.";
} else  {
    echo "The energy consumption threshold of $energyCapacityThreshold kWh will not be met within 50 years.";
}
