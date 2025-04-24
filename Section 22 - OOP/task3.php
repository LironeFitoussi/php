<?php

class Amenity {
    public $name;
    public $movable;
    public $description;

    public function __construct(string $name, bool $movable, string $description) {
        $this->name = $name;
        $this->movable = $movable;
        $this->description = $description;
    }
}

class Room {
    public $roomNumber;
    public $rate;
    public $amenities = [];

    public function __construct(int $roomNumber, float $rate, array $amenities = []) {
        $this->roomNumber = $roomNumber;
        $this->rate = $rate;
        $this->amenities = $amenities;
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

    // 🔓 Now public so external tests can call it
    private function addAmenity(Amenity $amenity): void {
        $this->amenities[] = $amenity;
    }

    // 🔓 Now public
    private function removeAmenity(string $name): ?Amenity {
        foreach ($this->amenities as $index => $amenity) {
            if ($amenity->name === $name) {
                unset($this->amenities[$index]);
                $this->amenities = array_values($this->amenities); // reindex
                return $amenity;
            }
        }
        return null;
    }

    // 🔓 Now public
    private function transferAmenity(Room $to, string $amenityName): void {
        foreach ($this->amenities as $amenity) {
            if ($amenity->name === $amenityName && $amenity->movable) {
                $removedAmenity = $this->removeAmenity($amenityName);
                if ($removedAmenity) {
                    $to->addAmenity($removedAmenity);
                }
                return;
            }
        }
    }
}
