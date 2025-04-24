<?php

// Compatible with PHP 7.x and above

class Room {
    public $roomNumber;
    public $rate;

    function __construct($roomNumber, $rate) {
        $this->roomNumber = $roomNumber;
        $this->rate = $rate;
    }

    function getRoomNumber(): int {
        return $this->roomNumber;
    }

    function calculateCost(int $numberOfDays): float {
        if ($numberOfDays < 0) {
            echo "The number of days can't be negative\n";
            return 0;
        }
        return round($this->rate * $numberOfDays, 2);
    }
}
