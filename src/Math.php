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
        if ($i == 1) {
            return 1;
        } else {
            return $i * self::factorial($i - 1);
        }
    }
}