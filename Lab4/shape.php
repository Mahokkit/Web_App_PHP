<?php
/**
 * Created by PhpStorm.
 * User: Edward Ma
 * Date: 10/12/17
 * Time: 9:53 PM
 */



    abstract class shape
    {
        protected $radius;
        protected $length;
        protected $width;
        protected $base;
        protected $height;

        // Abstract methods
        abstract public function CalculateArea();

        public function __construct($in_radius, $in_length, $in_width, $in_base, $in_height)
        {
            $this->radius = $in_radius;
            $this->length = $in_length;
            $this->width = $in_width;
            $this->base = $in_base;
            $this->height = $in_height;
        }

        /**
         * @return mixed
         */
        public function getRadius()
        {
            return $this->radius;
        }

        /**
         * @return mixed
         */
        public function getLength()
        {
            return $this->length;
        }

        /**
         * @return mixed
         */
        public function getWidth()
        {
            return $this->width;
        }

        /**
         * @return mixed
         */
        public function getBase()
        {
            return $this->base;
        }

        /**
         * @return mixed
         */
        public function getHeight()
        {
            return $this->height;
        }
    }
