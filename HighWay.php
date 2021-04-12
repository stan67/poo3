<?php


abstract class HighWay
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    
    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }


    /* -------------------- 
        MÉTHODES
    -------------------- */

    abstract function addVehicle(Vehicle $vehicle);


    /* -------------------- 
        GET / SET
    -------------------- */
    
    // currentVehicules
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles) : void
    {
        $this->currentVehicles=$currentVehicles;
    }

    // nbLane
    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane) : void
    {
        $this->nbLane=$nbLane;
    }

    // maxSpeed
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed) : void
    {
        $this->maxSpeed=$maxSpeed;
    }
}
