<?php
    
    class Bike extends Vehicle implements LightableInterface
    {
        public function __construct(protected string $color, protected int $nbSeats)
        {
            parent::__construct($color, $nbSeats);
        }
        
        public function switchOn(): bool
        {
            if ($this->currentSpeed > 10) {
                return true;
            } else {
                throw new Error("Il faut pédaler pour switch On !");
            }
        }
        
        public function switchOff(): bool
        {
            return false;
        }
    }