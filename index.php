<?php
    
    require_once 'Bicycle.php';
    require_once 'Voiture.php';
    
    $car1 = new Voiture('red', 2, 'essence');
    $car2 = new Voiture('blue', 4, 'electric');
    $bicycle1 = new Bicycle('yellow');
    $bicycle2 = new Bicycle('black');
    
    echo $car1->start();
    echo '<br>';
    echo $car1->forward();
    echo '<br>';
    echo $car1->getCurrentSpeed();
    echo '<br>';
    echo $car1->brake();
    echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . 'km/h' . '<br>';
    echo '<br>';
    echo $car2->start();
    echo '<br>';
    echo $car2->forward();
    echo '<br>';
    echo $car2->brake();
    echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
    echo '<br>';
    echo $bicycle1->getColor();
    echo '<br>';
    echo $bicycle1->forward();
    echo '<br>';
    echo $bicycle1->getCurrentSpeed();
    echo '<br>';
    echo $bicycle1->brake();
    echo '<br>';
    echo $bicycle2->getColor();
    echo '<br>';
    echo $bicycle2->forward();
    echo '<br>';
    echo $bicycle2->getCurrentSpeed();
    echo '<br>';
    echo $bicycle2->brake();
    