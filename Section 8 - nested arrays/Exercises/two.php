<?php

// Define the campaigns array as provided
$campaigns = [
    'Spring Sale' => [
        'AdSet1' => [
            'impressions' => 10000
        ],
        'AdSet2' => [
            'impressions' => 15000
        ]
    ],
    'Holiday Deals' => [
        'AdSet1' => [
            'impressions' => 12000
        ],
        'AdSet2' => [
            'impressions' => 18000
        ]
    ]
];

// PART 1: Calculate total clicks and impressions per campaign
$totalCampaignClicks = [];
$totalCampaignImpressions = [];

// PART 2: Calculate overall totals for averages
$totalClicks = 0;
$totalImpressions = 0;
$adSetCount = 0;

foreach ($campaigns as $campaignKey => $adSets) {
    $clicksSum = 0;
    $impressionsSum = 0;

    foreach ($adSets as $adSet) {
        // Only process if the ad set is an array
        if (!is_array($adSet)) {
            continue;
        }

        // Use 0 as default if a key is missing
        $clicks = $adSet['clicks'] ?? 0;
        $impressions = $adSet['impressions'] ?? 0;

        $clicksSum += $clicks;
        $impressionsSum += $impressions;

        $totalClicks += $clicks;
        $totalImpressions += $impressions;
        $adSetCount++;
    }

    $totalCampaignClicks[$campaignKey] = $clicksSum;
    $totalCampaignImpressions[$campaignKey] = $impressionsSum;
}

// Compute averages with division-by-zero check
if ($adSetCount > 0) {
    $avgClicks = round($totalClicks / $adSetCount);
    $avgImpressions = round($totalImpressions / $adSetCount);
} else {
    $avgClicks = 0;
    $avgImpressions = 0;
}

// Expected output: "Average clicks per ad set: 0, Average impressions per ad set: 13750."
echo "Average clicks per ad set: $avgClicks, Average impressions per ad set: $avgImpressions.";