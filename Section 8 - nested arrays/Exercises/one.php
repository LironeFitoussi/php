<?php

foreach ($campaigns as $campaignName => $adSets) {
    $adSetNames = [];

    foreach ($adSets as $adSet) {
        $adSetNames[] = '"' . $adSet['name'] . '"';
    }

    echo "- $campaignName: " . implode(', ', $adSetNames) . "\n";
}
