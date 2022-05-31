<?php
    
    final class ResidentialWay extends Highway
    {
        public function __construct(
            protected array $currentVehicles = [],
            protected int $nbLane = 2,
            protected int $maxSpeed = 50
        ) {
            parent::__construct($currentVehicles, $nbLane, $maxSpeed);
            $this->nbLane = $nbLane;
            $this->maxSpeed = $maxSpeed;
        }
        
        public function addVehicle($vehicle)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }