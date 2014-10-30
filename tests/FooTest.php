<?php namespace Acme;

/**
* Testing System Functions
* When using the same namespace for the test class
* as for the class being tested, and in the class
* being tested we have a function that appears to be
* a global function e.g. time(), then phpunit will
* first look for a function Acme\time().
* Which means we can create our own function, named time()
* and use it to return what we want.
*/

function time() { return 'stub'; }

class FooTest extends \PHPUnit_Framework_TestCase {

    public function test_gets_the_time()
    {
        $result = (new Foo)->go();

        $this->assertEquals('stub', $result);
    }
}