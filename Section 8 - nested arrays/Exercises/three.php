<?php

$campaigns = [
    'Tech Trends Extravaganza' => [
        'AdSet1' => [
            'name' => 'Launch Special',
            'targetAudience' => ['Young Adults', 'Tech Enthusiasts'],
            'clicks' => 150,
            'impressions' => 10000
        ],
        'AdSet2' => [
            'name' => 'Holiday Sale',
            'targetAudience' => ['Families', 'Holiday Shoppers'],
            'clicks' => 250,
            'impressions' => 15000
        ],
    ],
    'Seasonal Fashion Frenzy' => [
        'AdSet1' => [
            'name' => 'Spring Collection',
            'targetAudience' => ['Fashion Enthusiasts', 'Women'],
            'clicks' => 200,
            'impressions' => 12000
        ],
        'AdSet2' => [
            'name' => 'Back to School',
            'targetAudience' => ['Students', 'Parents', 'Young Adults'],
            'clicks' => 300,
            'impressions' => 18000
        ],
    ],
];

// Example input (you'll get this from the environment in real test)
$specifiedAudience = 'Young Adults';

// =====================
// 1. Highest CTR Campaign
// =====================
$highestCTR = [];
$maxCTR = -1;

foreach ($campaigns as $campaignName => $adSets) {
    $totalClicks = 0;
    $totalImpressions = 0;

    foreach ($adSets as $adSet) {
        if (!is_array($adSet)) continue;
        $clicks = $adSet['clicks'] ?? 0;
        $impressions = $adSet['impressions'] ?? 1; // Avoid division by zero
        $totalClicks += $clicks;
        $totalImpressions += $impressions;
    }

    if ($totalImpressions > 0) {
        $ctr = round(($totalClicks / $totalImpressions) * 100, 2);
        if ($ctr > $maxCTR) {
            $maxCTR = $ctr;
            $highestCTR = [$campaignName => $ctr];
        }
    }
}

// =====================
// 2. Unique Target Audiences
// =====================
$uniqueTargetAudiences = [];

foreach ($campaigns as $adSets) {
    foreach ($adSets as $adSet) {
        if (!is_array($adSet)) continue;
        if (isset($adSet['targetAudience']) && is_array($adSet['targetAudience'])) {
            foreach ($adSet['targetAudience'] as $audience) {
                if (!in_array($audience, $uniqueTargetAudiences)) {
                    $uniqueTargetAudiences[] = $audience;
                }
            }
        }
    }
}

// =====================
// 3. Highest CTR Ad for Specific Audience
// =====================
$adWithHighestCTRForAudience = [
    'targetAudience' => $specifiedAudience,
    'highestCTRAdSet' => '',
    'highestCTR' => 0
];

$maxAudienceCTR = -1;

foreach ($campaigns as $adSets) {
    foreach ($adSets as $adSet) {
        if (!is_array($adSet)) continue;
        $audiences = $adSet['targetAudience'] ?? [];
        if (!is_array($audiences)) continue;

        if (in_array($specifiedAudience, $audiences)) {
            $clicks = $adSet['clicks'] ?? 0;
            $impressions = $adSet['impressions'] ?? 1;
            $ctr = round(($clicks / $impressions) * 100, 2);

            if ($ctr > $maxAudienceCTR) {
                $maxAudienceCTR = $ctr;
                $adWithHighestCTRForAudience['highestCTRAdSet'] = $adSet['name'] ?? 'Unknown';
                $adWithHighestCTRForAudience['highestCTR'] = $ctr;
            }
        }
    }
}
