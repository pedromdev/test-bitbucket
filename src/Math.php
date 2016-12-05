<?php

/**
 * Created by PhpStorm.
 * User: pedromdev
 * Date: 03/12/16
 * Time: 23:39
 */
class Math
{

    public static function factorial($i)
    {
        if ($i < 0) {
            throw new \InvalidArgumentException("Factorial of $i does not exist");
        }
        if ($i == 1 || $i == 0) {
            return 1;
        } else {
            return $i * self::factorial($i - 1);
        }
    }
}