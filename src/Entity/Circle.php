<?php

namespace App\Entity;

class Circle
{

    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function calulateArea(): float
    {
        return number_format((float) (pi() * ($this->radius * $this->radius)), 2, '.', '');;
    }

    public function calulateCircumference(): float
    {
        return number_format((float) (2 * pi() * $this->radius), 2, '.', '');;
    }
}