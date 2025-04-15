<?php

function extractOffset($timezoneString) {
    if ($timezoneString === "UTC") {
        return 0;
    }

    // מחפש מספר אחרי UTC+ או UTC-
    preg_match('/UTC([+-]\d+)/', $timezoneString, $matches);
    return (int)$matches[1];
}

function calculateTimeOverlap($participants) {
    $preferredStart = 12;
    $preferredEnd = 18;

    $availableWindows = [];

    foreach ($participants as $participant) {
        $offset = extractOffset($participant['Timezone']);

        // מחשבים את שעות העבודה של כל משתתף לפי UTC
        $startUTC = $preferredStart + $offset;
        $endUTC = $preferredEnd + $offset;

        $availableWindows[] = ['start' => $startUTC, 'end' => $endUTC];
    }

    // נאתר את זמן ההתחלה הכי מאוחר ואת זמן הסיום הכי מוקדם
    $overlapStart = max(array_column($availableWindows, 'start'));
    $overlapEnd = min(array_column($availableWindows, 'end'));

    if ($overlapStart < $overlapEnd) {
        return ['start' => $overlapStart, 'end' => $overlapEnd];
    } else {
        return null;
    }
}

function suggestOptimalMeetingTime($participants = null) {
    // אם לא סופק מערך משתתפים - נשתמש בברירת מחדל (כולם ב־UTC)
    if (!$participants) {
        $participants = [
            ['Name' => 'Default1', 'Timezone' => 'UTC'],
            ['Name' => 'Default2', 'Timezone' => 'UTC']
        ];
    }

    $overlap = calculateTimeOverlap($participants);

    if ($overlap) {
        echo "Suggested meeting time: {$overlap['start']} to {$overlap['end']} UTC\n";
    } else {
        echo "No available meeting time for these time zones.\n";
    }
}