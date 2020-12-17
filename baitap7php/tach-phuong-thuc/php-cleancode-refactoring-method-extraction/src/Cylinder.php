<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public $volume;
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        $this->volume = $perimeter * $height + 2 * $baseArea;
        return $this->volume;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public $baseArea;

    public function getPerimeter($radius)
    {
        $this->baseArea = pi() * $radius * $radius;
        return $this->baseArea;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public $perimeter;
    public function getBaseArea($radius)
    {
        $this->perimeter = 2 * pi() * $radius;
        return $this->perimeter;
    }
}