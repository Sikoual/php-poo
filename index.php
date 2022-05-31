<?php
    
    require_once 'Vehicle.php';
    require_once 'Bicycle.php';
    require_once 'Voiture.php';
    require_once 'Camion.php';
    
    $camion = new Camion('red',5,2000);
    $camion->setNbWheels(4);
    $camion->setCurrentCharge(1000);
    echo $camion->forward();
    echo $camion->brake();
    var_dump($camion);