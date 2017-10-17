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
        protected $gos;
//        protected $shrink;
        protected $newArea;

        public function __construct($in_radius,$in_gos)
        {
            $this->radius = $in_radius;
            if ($in_gos != null)
            {
                $this->gos = $in_gos;
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

        public function gos()
        {
            // TODO: Implement grow() method.
//            $grow = $this->area;
//            $this->grow = $grow * ($this->grow)/100;
            if ($this->gos == 100)
            {
                $newArea = $this->area;
                $this->newArea = $newArea;
                return $newArea;
            }
            else if ($this->gos > 100)
            {
                $newArea = ($this->area * ($this->gos / 100));
                $this->newArea = $newArea;
                return round($newArea,2);
            }
            else if ($this->gos < 100)
            {
                $newArea = ($this->area - ($this->area * ($this->gos / 100)));
                $this->newArea = $newArea;
                return round($newArea,2);
            }

        }


        public function radius()
        {
            $this->radius = sqrt($this->newArea / M_PI);
            return round($this->radius,3, PHP_ROUND_HALF_DOWN);
        }


    }