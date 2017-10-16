<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:52 PM
 */

    require_once("shape.php");
    require_once("iResizable.php");

    class circle extends shape implements iResizable
    {
        protected $area;
        protected $radius;
        protected $grow;
        protected $shrink;
        public function __construct($in_radius,$in_grow, $in_shrink)
        {
            $this->radius = $in_radius;
            if ($in_grow != null)
            {
                $this->grow = $in_grow;
            }

            if ($in_shrink != null)
            {
                $this->shrink = $in_shrink;
            }
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

        public function grow()
        {
            // TODO: Implement grow() method.
            $this->grow = ($this->grow)/100;
            $this->area = $this->area * $this->grow;

            return (round($this->area,2));
        }

        public function shrink()
        {
            // TODO: Implement shrink() method.
        }

        public function radius()
        {
            $this->radius = sqrt($this->area / M_PI);
            return round($this->radius,3, PHP_ROUND_HALF_DOWN);
        }

    }