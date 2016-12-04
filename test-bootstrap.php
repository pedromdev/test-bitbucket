<?php
/**
 * Created by PhpStorm.
 * User: pedromdev
 * Date: 03/12/16
 * Time: 23:49
 */

$phpFiles = glob(__DIR__ . "/src/*.php");

foreach ($phpFiles as $phpFile) {
    require $phpFile;
}