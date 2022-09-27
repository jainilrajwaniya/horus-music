<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Circle;
use App\Entity\Triangle;

/**
 * Controller used for calculate are of various shapes
 */
class AreaController
{
    private $type;

    private $shapeSidesArr;

    private $area;

    private $circumference;

    /**
     * @Route("/api/triangle/{a}/{b}/{c}", methods={"GET"})
     */
    public function triangleAction($a, $b, $c)
    {
        $triangle = new Triangle($a, $b, $c);
        
        $this->area = $triangle->calulateArea();
        $this->circumference = $triangle->calulateCircumference();

        $this->shapeSidesArr = ['a' => $a, 'b' => $b, 'c' => $c];
        $this->type = 'triangle';

        return new JsonResponse($this->getResponsePayload());
    }


    /**
     * @Route("/api/circle/{radius}", methods={"GET"})
     */
    public function circleAction($radius)
    {
        $circle = new Circle($radius);
        
        $this->area = $circle->calulateArea();
        $this->circumference = $circle->calulateCircumference();

        $this->shapeSidesArr = ['radius' => $radius];
        $this->type = 'circle';

        return new JsonResponse($this->getResponsePayload());
    }

    /**
     * Function returns response payload for area apis
     * 
     * 
     */
    private function getResponsePayload(): array
    {
        $resultArr['type'] = $this->type;
        $resultArr['surface'] = $this->area;
        $resultArr['circumference'] = $this->circumference;

        return array_merge($resultArr, $this->shapeSidesArr);
    }
}