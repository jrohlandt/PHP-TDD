<?php namespace Acme;

class Subtraction implements Operation {

    public function run($num, $current)
    {

        /* if this is the first operation just return $num
            so that we don't try to subtract from null */
        if (is_null($current))
            return $num;

        return $current - $num;
    }
}