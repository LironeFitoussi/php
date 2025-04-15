<?php 
    function calculateTimeOverlap($offset1, $offset2) {
        $minTime = 12;
        $maxTime = 18;

        $offest1times = [$minTime + $offset1, $maxTime + $offset1];
        $offest2times = [$minTime + $offset2, $maxTime + $offset2];


        $overlapStart = max($offest1times[0], $offest2times[0]);
        $overlapEnd = min($offest1times[1], $offest2times[1]);

        if ($overlapStart < $overlapEnd) {
            return [$overlapStart, $overlapEnd];
        } else {
            return [];
        }
    };

    function suggestOptimalMeetingTime($offset1, $offset2) {
        $optionals = calculateTimeOverlap($offset1, $offset2);
        
        if (!empty($optionals)) {
            echo "Suggested meeting time: {$optionals[0]} to {$optionals[1]} UTC\n";
        } else {
            echo "No available meeting time for these time zones.\n";
        }
    }

?>

