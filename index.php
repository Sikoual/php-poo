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
require_once 'Bike.php';
require_once 'LightableInterface.php';

$bike = new Bike('red', 1);
$car = new Voiture('blue', 5, 'electric', true);
$skateBoard = new Skateboard('black', 1);


$bike->setCurrentSpeed(5);
try {
    echo $bike->switchOn();
} catch (Error $error) {
    echo $error->getMessage();
}

$bike->setCurrentSpeed(20);
try {
    echo $bike->switchOn();
} catch (Error $error) {
    echo $error->getMessage();
}
 
