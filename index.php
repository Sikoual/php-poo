<?php

require_once 'Speedometer.php';

echo Speedometer::convertKmToMiles(10);
echo '<br>';
echo Speedometer::convertMilesToKm(10);
echo '<br>';
echo Speedometer::convert100kmToMiles();
echo '<br>';
echo Speedometer::convert100milesToKm();