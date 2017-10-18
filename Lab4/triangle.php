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
    public $area;
    public $height;
    protected $base;
    protected $newArea;
    public $newH;

    public function __construct($in_height, $in_base, $in_gos)
    {
        $this->height = $in_height;
        $this->base = $in_base;

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
            $this->area = ($this->height * $this->base) / 2;

            //area of triangle is (height * base) / 2

            return round($this->area,2);
        }
        else
        {
            if ($this->gos == 100 || $this->gos == "")
            {
                $this->area = ($this->height * $this->base) / 2;
                $newArea = $this->area;

                return round($newArea,2);
            }
            else if ($this->gos > 100)
            {
                $this->area = ($this->height * $this->base) / 2;
                $newArea = ($this->area * ($this->gos / 100));
                $this->newArea = $newArea;
                return round($newArea,2);
            }
            else if ($this->gos < 100)
            {
                $this->area = ($this->height * $this->base) / 2;
                $newArea = ($this->area - ($this->area * ($this->gos / 100)));
                $this->newArea = $newArea;
                return round($newArea,2);
            }
        }
    }

    public function gos()
    {
        // TODO: Implement growOrShrink() method.
        if ($this->gos == 100 || $this->gos == null)
        {
//            $this->newR = sqrt($this->area / M_PI);
            return round($this->height, 3, PHP_ROUND_HALF_DOWN);
        }
        else
        {
//            $this->newR = sqrt($this->newArea / M_PI);
            $this->newH = ($this->newArea * 2) / $this->base;
            return round($this->newH, 3, PHP_ROUND_HALF_DOWN);
        }
    }


}
