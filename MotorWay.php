<?php

final class MotorWay extends Highway
{
    public function __construct(
        protected array $currentVehicles = [],
        protected int $nbLane = 4,
        protected int $maxSpeed = 130
    ) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }
}
