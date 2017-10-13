<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:52 PM
 */
require_once("shape.php");

class square extends shape
{
    protected $area;
    protected $length;
    protected $width;
    public function __construct($in_length, $in_width)
    {
        $this->length = $in_length;
        $this->width = $in_width;
    }

    // Abstract class method
    public function CalculateArea()
    {
        if($this->length)
        {
            $this->area = ($this->length) * ($this->width);

            //area of square is height times width.

            return round($this->area,2);
        }
    }

}