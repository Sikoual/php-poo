<?php
    
    require_once 'LightableInterface.php';
    
    class Voiture extends Vehicle implements LightableInterface
    {
        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];
        private int $energyLevel = 50;
        
        public function __construct(
            protected string $color,
            protected int $nbSeats,
            protected string $energy,
            private bool $hasParkBrake = false,
        ) {
            parent::__construct($color, $nbSeats);
            $this->setEnergy($energy);
        }
        
        public function start(): string
        {
            if ($this->hasParkBrake) {
                throw new Error("Enlevez le frein à main !");
            }
            
            if ($this->energyLevel > 0) {
                $sentence = "Lets GOO!";
            } else {
                $sentence = "Oops need fuel";
            }
            return $sentence;
        }
        
        public function getEnergy(): string
        {
            return $this->energy;
        }
        
        public function setEnergy(string $energy): Voiture
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }
        
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }
        
        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }
        
        public function setParkBrake(bool $hasParkBrake): void
        {
            $this->hasParkBrake = $hasParkBrake;
        }
        
        public function switchOn(): bool
        {
            return true;
        }
        
        public function switchOff(): bool
        {
            return false;
        }
    }