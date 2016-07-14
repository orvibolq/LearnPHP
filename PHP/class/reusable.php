<?php
/**
 * Created by PhpStorm.
 * User: liqiang
 * Date: 16/2/17
 * Time: 16:06
 */

echo 'Here is a very simple PHP statement'."<br>";

function myFunction() {
    echo 'myFunction called'."<br>";

}

function increament($value, $amount = 1) {
    $value = $amount + $amount;
}

function increament2(&$value, $amout = 1) {

    $value = $value + $amout;

}
function larger ($a,$b) {

    if (!isset($a) || !isset($b)) {

        return false;
    }elseif ($a > $b) {

        return $a;

    }else {
        return $b;
    }

}