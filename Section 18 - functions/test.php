<?php
// exerciseTest.php

require 'exercise.php';

function testCalculateTimeOverlap() {
    // Test case 1: Overlapping time ranges
    $result = calculateTimeOverlap(2, 3);
    assert($result === [9, 15], "Test case 1 failed: Expected [9, 15], got " . json_encode($result));

    // Test case 2: No overlap
    $result = calculateTimeOverlap(10, 5);
    assert($result === [], "Test case 2 failed: Expected [], got " . json_encode($result));

    // Test case 3: Exact overlap
    $result = calculateTimeOverlap(0, 0);
    assert($result === [12, 18], "Test case 3 failed: Expected [12, 18], got " . json_encode($result));

    // Test case 4: Partial overlap
    $result = calculateTimeOverlap(1, 4);
    assert($result === [8, 14], "Test case 4 failed: Expected [8, 14], got " . json_encode($result));

    // Test case 5: Negative offsets
    $result = calculateTimeOverlap(-2, -3);
    assert($result === [15, 21], "Test case 5 failed: Expected [15, 21], got " . json_encode($result));

    echo "All tests passed.\n";
}

testCalculateTimeOverlap();
?>