<?php
    
    require_once 'Vehicle.php';
    require_once 'Bicycle.php';
    require_once 'Voiture.php';
    require_once 'Camion.php';
    require_once 'Highway.php';
    require_once 'MotorWay.php';
    
    $moto = new Bicycle('red', 4);
    
    $motorWay = new MotorWay([]);
    $motorWay->addVehicle($moto);
    var_dump($motorWay);