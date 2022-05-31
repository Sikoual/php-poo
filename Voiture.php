<?php
    
    class Voiture
    {
        private int $nbWheels = 4;
        private int $currentSpeed;
        private int $energyLevel = 50;
        
        public function __construct(private string $color, private int $nbSeats, private string $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }
        
        public function forward(): string
        {
            $this->currentSpeed = 50;
            return "Yahoooo";
        }
        
        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "brake !!!";
            }
            $sentence = "I'm stopped ! ";
            
            return $sentence;
        }
        
        public function start(): string
        {
            if ($this->energyLevel > 0) {
                $sentence = "Lets GOO!";
            } else {
                $sentence = "Oops need fuel";
            }
            return $sentence;
        }
        
        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }
        
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }
        
        public function getColor(): string
        {
            return $this->color;
        }
        
        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }
        
        public function getEnergy(): string
        {
            return $this->energy;
        }
        
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }
    }
