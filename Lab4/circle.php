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
        public $area;
        public $radius;
        public $gos;
        public $newArea;

        public function __construct($in_radius,$in_gos)
        {
            $this->radius = $in_radius;

            if ($in_gos != "")
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

            if ($this->gos == 100 || $this->gos == "")
            {
                $newArea = $this->area;

                return round($newArea,2);
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
            if ($this->gos == 100 || $this->gos == null)
            {
                $this->radius = sqrt($this->area / M_PI);
                return round($this->radius, 3, PHP_ROUND_HALF_DOWN);
            }
            else
            {
                $this->radius = sqrt($this->newArea / M_PI);
                return round($this->radius, 3, PHP_ROUND_HALF_DOWN);
            }
        }


    }