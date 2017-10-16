<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:53 PM
 */

require_once ("shape.php");
require_once ("iResizable.php");

class triangle extends shape implements iResizable
{
    protected $area;
    protected $height;
    protected $base;
    public function __construct($in_height, $in_base)
    {
        $this->height = $in_height;
        $this->base = $in_base;
    }

    // Abstract class method
    public function CalculateArea()
    {
        if($this->height)
        {
            $this->area = ($this->height * $this->base) / 2;

            //area of triangle is (height * base) / 2

            return round($this->area,2);
        }
    }

    public function grow()
    {
        // TODO: Implement growOrShrink() method.
    }

    public function shrink()
    {
        // TODO: Implement shrink() method.
    }

}
