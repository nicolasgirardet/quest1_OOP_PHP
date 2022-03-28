<?php

class Car
{

  /*DEFINITION DES ATTRIBUTS DE "CAR"*/

  private int $nbWheels = 4;

  private int $currentSpeed;

  private string $color;

  private int $nbSeats;

  private string $energy;

  private string $energyLevel;

  /*DEFINITION DES METHODES DE "CAR"*/

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
  }


  public function getNbWheels(): int
  {
    return $this->nbWheels;
  }


  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setCurrentSpeed($currentSpeed)
  {
    $this->currentSpeed = $currentSpeed;
  }



  public function getColor(): string
  {
    return $this->color;
  }

  public function getNbSeats(): int
  {
    return $this->nbSeats;
  }

  public function getEnergy()
  {
    return $this->energy;
  }

  public function getEnergyLevel()
  {
    return $this->energyLevel;
  }

  public function forward(): string
  {
    $this->currentSpeed; {
    return "Go!";
  } }

  public function brake(): string
  {
    $sentence = "";

    while ($this->currentSpeed > 0) {

      $this->currentSpeed--;

      $sentence .= "Brake!!! \n";
    }

    $sentence .= "I'm stopped! \n";

    return $sentence;
  }

public function start(): string
  {
      $sentence = "I am starting the engine! \n";
      
    return $sentence; }

    }

