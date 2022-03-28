<?php

class Bicycle
{

    /*DEFINITION DES ATTRIBUTS DE "BICYCLE"*/

    private int $nbWheels = 2;

    private int $currentSpeed;

    private string $color;

    /*DEFINITION DES METHODES DE "BICYCLE"*/

    public function __construct(string $color)
    {
        $this->color = $color;
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

    public function forward(): string
    {
        $this->currentSpeed; {
            return "Go!";
        }
    }

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
        $sentence = "I start pedaling! \n";

        return $sentence;
    }
}
