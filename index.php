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

$moto = new Bicycle('red', 4);
$camion = new Camion('red', 4, 200);
$skateboard = new Skateboard('blue', 1);
$bike = new Bicycle('black', 1);

$pedestrian = new PedestrianWay();
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($skateboard);
var_dump($pedestrian);
    