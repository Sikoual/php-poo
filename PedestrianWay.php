<?php

final class PedestrianWay extends Highway
{
    public function __construct(
        protected array $currentVehicles = [],
        protected int $nbLane = 1,
        protected int $maxSpeed = 10
    ) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}