<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:52 PM
 */

    include_once("shape.php");
    include_once("iResizable.php");

    class circle extends shape implements iResizable
    {
        public $area;
        public $radius;
        public $newR;
        protected $gos;
        protected $newArea;

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
            if(!$this->gos)
            {
                $this->area = M_PI * (pow($this->radius, 2));

                //M_PI is Pi... so have a pi! Area of Circle = Pi * (Radius)^2

                return round($this->area,2);
            }
            else
            {
                if ($this->gos == 100 || $this->gos == "")
                {
                    $this->area = M_PI * (pow($this->radius, 2));
                    $newArea = $this->area;

                    return round($newArea,2);
                }
                else if ($this->gos > 100)
                {
                    $this->area = M_PI * (pow($this->radius, 2));
                    $newArea = ($this->area * ($this->gos / 100));
                    $this->newArea = $newArea;
                    return round($newArea,2);
                }
                else if ($this->gos < 100)
                {
                    $this->area = M_PI * (pow($this->radius, 2));
                    $newArea = ($this->area - ($this->area * ($this->gos / 100)));
                    $this->newArea = $newArea;
                    return round($newArea,2);
                }
            }
        }

//        public function gos()
//        {
//
//            if ($this->gos == 100 || $this->gos == "")
//            {
//                $newArea = $this->area;
//
//                return round($newArea,2);
//            }
//            else if ($this->gos > 100)
//            {
//                $newArea = ($this->area * ($this->gos / 100));
//                $this->newArea = $newArea;
//                return round($newArea,2);
//            }
//            else if ($this->gos < 100)
//            {
//                $newArea = ($this->area - ($this->area * ($this->gos / 100)));
//                $this->newArea = $newArea;
//                return round($newArea,2);
//            }
//
//        }


        public function gos()
        {
            if ($this->gos == 100 || $this->gos == null)
            {
//                $this->newR = sqrt($this->area / M_PI);
                return round($this->radius, 3, PHP_ROUND_HALF_DOWN);
            }
            else
            {
                $this->newR = sqrt($this->newArea / M_PI);
                return round($this->newR, 3, PHP_ROUND_HALF_DOWN);
            }
        }


    }