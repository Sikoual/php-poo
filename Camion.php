<?php

class Camion extends Vehicle
{

    private int $currentCharge = 0;

    public function __construct(
        protected string $color,
        protected int $nbSeats,
        private int $capacityStockage
    ) {
        parent::__construct($color, $nbSeats);
    }

    public function getCurrentCharge(): int
    {
        return $this->currentCharge;
    }

    public function setCurrentCharge(int $currentCharge): void
    {
        $this->currentCharge = $currentCharge;
    }

    public function getCapacityStockage(): int
    {
        return $this->capacityStockage;
    }

    public function setCapacityStockage($capacityStockage): void
    {
        $this->capacityStockage = $capacityStockage;
    }

    public function isFull(): string
    {
        if ($this->currentCharge != $this->capacityStockage) {
            $sentence = "in filling";
        } else {
            $sentence = "full";
        }

        return $sentence;
    }
}
