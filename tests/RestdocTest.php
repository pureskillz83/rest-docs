<?php

use Pureskillz83\Restdoc\Restdoc;

class RestdocTest extends PHPUnit_Framework_TestCase {

    public function testDocHasCheese()
    {
        $restDoc = new Restdoc;
        $this->assertTrue($restDoc->hasCheese());
    }

}