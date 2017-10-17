<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:53 PM
 */



    abstract class shape
    {
        protected $gos;
        protected $newR;

        /**
         * @return mixed
         */
        public function getGos()
        {
            return $this->gos;
        }

        // Abstract methods
        abstract public function CalculateArea();

        public function __construct($in_gos, $in_newR)
        {
         $this->gos = $in_gos;
         $this->newR = $in_newR;
        }
    }
