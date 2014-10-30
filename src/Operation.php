<?php namespace Acme;

interface Operation {
    /**
    * Perform the arithmetic
    *
    * @param integer $num
    * @param integer $current
    * @return integer
    */
    public function run($num, $current);
}