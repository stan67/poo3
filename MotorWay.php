<?php
require_once "HighWay.php";

final class MotorWay extends HighWay
{

    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }


    /* -------------------- 
        MÉTHODES
    -------------------- */
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return "Ce vehicule n'est pas adapté pour l'autoroute";
        }
    }

}


