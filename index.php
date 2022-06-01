<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Voiture.php';
require_once 'Camion.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$car = new Voiture('red', 4, "fuel");
$car->setParkBrake(true);
    
try {
    $car->start();
} catch (Error $e) {
    $car->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}

var_dump($car);