<?php

namespace App\Entity;

/**
 * 
 */
class Triangle
{

    private $a;
    private $b;
    private $c;
    
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calulateArea(): float
    {
        return number_format((float) (($this->a * $this->b) / 2), 2, '.', '');
    }

    public function calulateCircumference(): float
    {
        return number_format((float) ($this->a + $this->b + $this->c), 2, '.', '');
    }
}