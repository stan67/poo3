<?php

abstract class Vehicle
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;


    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    /* -------------------- 
        MÉTHODES
    -------------------- */
    public function forward(): string
    {
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    
    /* -------------------- 
        GET / SET
    -------------------- */

    // currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    // color
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // nbSeats
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // nbWheels
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}