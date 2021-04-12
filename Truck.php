<?php

require_once "vehicle.php";

class Truck extends Vehicle
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    private string $capacity;
    private int $loading = 0;
    private string $energy;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity=$capacity;
        $this->setEnergy($energy);
    }


    /* -------------------- 
        MÉTHODES
    -------------------- */
    public function truckIsFull()
    {
        if ($this->getCapacity() <= $this->loading)
        {
            return "Capacity full.";
        } else {
            return "Filling.";
        }
        return $this;

    }


    /* -------------------- 
        GET / SET
    -------------------- */

    // capacity
    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity) : void
    {
        $this->capacity=$capacity;
    }

    // loading
    public function getLoading()
    {
        return $this->loading;
    }

    public function setLoading($loading)
    {
        $this->loading=$loading;
    }

    // energy
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Truck
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy=$energy;
        }
        return $this;
    }

}