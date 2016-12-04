<?php

/**
 * Created by PhpStorm.
 * User: pedromdev
 * Date: 03/12/16
 * Time: 23:41
 */
class MathTest extends PHPUnit_Framework_TestCase
{

    public function test5factorial()
    {
        $this->assertEquals(120, Math::factorial(5));
    }
}
