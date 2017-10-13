<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:52 PM
 */

    require_once("shape.php");

    class circle extends shape
    {
        protected $area;
        protected $radius;
        public function __construct($in_radius)
        {
            $this->radius = $in_radius;
        }

        // Abstract class method
        public function CalculateArea()
        {
            if($this->radius)
            {
                $this->area = M_PI * (pow($this->radius, 2));

                //M_PI is Pi... so have a pi! Area of Circle = Pi * (Radius)^2

                return round($this->area,2);
            }
        }

    }