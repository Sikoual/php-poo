<?php

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        return "En cours de charge $percentage";
    }

    public function unLoad(int $percentage): int
    {
        return "Se décharge reste $percentage";
    }
}