<?php

// Connexions
require "MotorWay.php";
require "PedestrianWay.php";
require "ResidentialWay.php";
require "Car.php";
require "Truck.php";
require "Bicycle.php";

// Bicycle
$bike = new Bicycle("blue", 1);

// Car
$mustang = new Car("blue", 4, "fuel");

// MotorWay
$superWay = new MotorWay();
// Utilisation de la fonction addVehicle pour verifier si le vehicle peut circuler sur la superWay
echo $superWay->addVehicle($mustang); // il peut car la fonction abstraite pour MotorWay car la variable vehicle est bien instancié à ma classe Car
echo "En prenant l'objet bike cela nous retourne : " .$superWay->addVehicle($bike) ."<br/>"; // Ne peut pas car bike est issus de la class Bicycle.


// ResidentialWay
$residentialWay = new ResidentialWay();
echo $residentialWay->addVehicle($mustang); //Stocké dans le tableau currentVehicles
echo $residentialWay->addVehicle($bike); // Stocké dans le tableau currentVehicles


// PedestrianWay
$pedestrianWay = new PedestrianWay();
echo $pedestrianWay->addVehicle($mustang); //Return Le véhicule n'est pas adapté pour la zone pietonne
echo $pedestrianWay->addVehicle($bike); //Stocké dans le tableau currentVehicles