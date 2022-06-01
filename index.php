<?php
    
require_once 'Personne.php';

$ironman = new Personne('Stark', 'Tony', 'Manoir Stark', "23/05/1970");

echo $ironman->afficherInformations();
echo '<br>';
echo $ironman->ageNow();
