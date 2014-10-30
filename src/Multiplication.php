<?php namespace Acme;

class Multiplication implements Operation {

    public function run($num, $current)
    {
        /* if this is the first operation just return $num
            so that we don't try to multiply $num with null */
        if (is_null($current))
            return $num;

        return $current * $num;
    }
}