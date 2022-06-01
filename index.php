<?php

require_once 'Personne.php';

$ironman = new Personne(
    'Stark',
    'Tony',
    'Manoir Stark', new DateTime('1970-05-23')
);

echo $ironman->displayInformation();
echo $ironman->ageNow();