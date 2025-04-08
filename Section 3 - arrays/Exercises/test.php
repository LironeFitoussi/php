<?php
// ----- Predefined Data -----
// (These arrays/values are provided in the environment.)
$waitingList = ['Ava Stone', 'Dylan Marsh', 'Emma Lake', 'Grace Hill', 'Henry Cole', 'Kyle Brook', 'Lily Snow', 'Mason Cliff', 'Nora Field', 'Sophia Forest'];
$priorityParticipants = [];
$individualName = 'Nora Field';

// ----- Step 1: Build Final Attendees -----
// Start by selecting up to 5 unique names from $priorityParticipants (in order).
$finalAttendees = [];
foreach ($priorityParticipants as $name) {
    if (!in_array($name, $finalAttendees)) {
        $finalAttendees[] = $name;
    }
    if (count($finalAttendees) === 5) {
        break;
    }
}
// If fewer than 5 names were found, fill the remaining slots using names from $waitingList.
if (count($finalAttendees) < 5) {
    foreach ($waitingList as $name) {
        if (!in_array($name, $finalAttendees)) {
            $finalAttendees[] = $name;
        }
        if (count($finalAttendees) === 5) {
            break;
        }
    }
}
// Now sort $finalAttendees alphabetically.
sort($finalAttendees);

// ----- Step 2: Identify Backup Candidates -----
// Merge the two lists (preserving original order) and deduplicate.
$combined = array_merge($priorityParticipants, $waitingList);
$uniqueCombined = [];
foreach ($combined as $name) {
    if (!in_array($name, $uniqueCombined)) {
        $uniqueCombined[] = $name;
    }
}
// From the unique combined candidates, pick the first 3 that are NOT in $finalAttendees.
$backupCandidates = [];
foreach ($uniqueCombined as $name) {
    if (!in_array($name, $finalAttendees)) {
        $backupCandidates[] = $name;
    }
    if (count($backupCandidates) === 3) {
        break;
    }
}

// ----- Step 3: Determine Remaining (Waiting) Candidates -----
// "Remaining" are the uniqueCombined candidates not already in finalAttendees or backupCandidates.
$remainingCandidates = [];
foreach ($uniqueCombined as $name) {
    if (!in_array($name, $finalAttendees) && !in_array($name, $backupCandidates)) {
        $remainingCandidates[] = $name;
    }
}

// ----- Step 4: Individual Status Inquiry -----
// Check if $individualName falls in finalAttendees, backupCandidates, or among the remainingCandidates.
// For those in remainingCandidates, provide their waiting position (1-indexed).
if (in_array($individualName, $finalAttendees)) {
    $individualStatus = 'Final Attendee';
} elseif (in_array($individualName, $backupCandidates)) {
    $individualStatus = 'Backup Candidate';
} elseif (($pos = array_search($individualName, $remainingCandidates)) !== false) {
    // Position calculated in the filtered waiting list (1-indexed)
    $individualStatus = 'Waiting, position ' . ($pos + 1);
} else {
    $individualStatus = 'Not found';
}

// ----- Step 5: (Optional) Display Backup Candidate Messages -----
// (These messages are printed as per the instructions.)
foreach ($backupCandidates as $client) {
    echo "Hey {$client}, we want to inform you that you are one of our backup candidates. 🥳\n";
}

// (For testing purposes, you might also want to check the value of $individualStatus.)
// echo "Individual Status for {$individualName}: {$individualStatus}";
?>
