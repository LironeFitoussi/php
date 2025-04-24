<?php
class Amenity {
    public $name;
    public $movable;
    public $description;

    function __construct($name, $movable, $description) {
        $this->name = $name;
        $this->movable = $movable;
        $this->description = $description;
    }
};

class Room {
    public $roomNumber;
    public $rate;
    public $amenities = [];

    public function __construct(int $roomNumber, float $rate, array $amenities = []) {
        $this->roomNumber = $roomNumber;
        $this->rate = $rate;
        $this->amenities = $amenities; // ✅ assign directly
    }

    public function getRoomNumber(): int {
        return $this->roomNumber;
    }

    public function calculateCost(int $numberOfDays): ?float {
        if ($numberOfDays <= 0) {
            return null;
        }
        return round($this->rate * $numberOfDays, 2);
    }

    public function createDescription(): string {
        $description = "";
        foreach ($this->amenities as $amenity) {
            if ($amenity instanceof Amenity) {
                $description .= $amenity->description . " ";
            }
        }
        return trim($description);
    }
}
