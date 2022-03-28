<?php 

require_once 'Car.php';

$homersPinkSedan = new Car($color = 'pink', $nbSeats = '5', $energy = 'diesel oil');

$homersPinkSedan->setCurrentSpeed(80);


/*var_dump($homersPinkSedan);*/

echo $homersPinkSedan->start();

echo $homersPinkSedan->forward();

echo '<br> Homer\'s speed: ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';

echo $homersPinkSedan->brake();

echo '<br> Homer\'s speed: ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';

echo $homersPinkSedan->brake();

echo '<br> <br>';

$margesStationWagon = new Car($color = 'orange', $nbSeats = '6', $energy = 'petrol');

$margesStationWagon->setCurrentSpeed(40);

/*var_dump($margesStationWagon);*/

echo $margesStationWagon->start();

echo $margesStationWagon->forward();

echo '<br> Marge\'s speed: ' . $margesStationWagon->getCurrentSpeed() . ' km/h' . '<br>';

echo $margesStationWagon->brake();

echo '<br> Marge\'s speed: ' . $margesStationWagon->getCurrentSpeed() . ' km/h' . '<br>';

echo $margesStationWagon->brake();

/*BICYCLE => BART*/

require_once 'Bicycle.php';

echo '<br> <br>';

$bartsbike = new Bicycle('blue');

$bartsbike->setCurrentSpeed(18);

echo $bartsbike->start();

echo $bartsbike->forward();

echo '<br> Bart\'s speed: ' . $bartsbike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bartsbike->brake();

echo '<br> Bart\'s speed: ' . $bartsbike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bartsbike->brake();

/*BICYCLE => MAGGIE*/

$maggiesBicycle = new Bicycle('purple');

echo '<br> <br>';

$maggiesBicycle->setCurrentSpeed(2);

echo $maggiesBicycle->start();

echo $maggiesBicycle->forward();

echo '<br> Maggie\'s speed: ' . $maggiesBicycle->getCurrentSpeed() . ' km/h' . '<br>';

echo $maggiesBicycle->brake();

echo '<br> Maggie\'s speed: ' . $maggiesBicycle->getCurrentSpeed() . ' km/h' . '<br>';

echo $maggiesBicycle->brake();



?>