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
        private $street_legal;

        public function __construct($in_name,$in_owner,$in_mileage,$in_streel_legal)
        {
            parent::__construct( $in_name,$in_owner,$in_mileage);
            $this->street_legal  = $in_streel_legal;
        }

        // Abstract class method
        public function CalculateArea()
        {
            if($this->street_legal)
            {
                $this->mileage += 50;
                return "Drove $this->owner's $this->name fifty miles!";
            }
            else
            {
                return "You cannot drive this car on the highway!";
            }
        }

        // Interface method
        public function runIntoTree()
        {
            return "Hit a tree. This is the end of $this->owner's $this->name!";
        }
    }