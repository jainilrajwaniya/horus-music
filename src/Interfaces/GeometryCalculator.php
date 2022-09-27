<?php

namespace App\Interfaces;

interface GeometryController
{
    public function getAreaSum(array $arrArea): float;


    public function getDiameterSum(array $arrDiam): float;
}