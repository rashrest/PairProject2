<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
function printArr($number)
{
    foreach ($number as $num) {
        echo "$num <br>";
    }
}

function largest($number)
{
    $large = "";
    foreach ($number as $num) {
        if ($num > $large) {
            $large = $num;
        }
    }
    echo "The largest number is $large";
}
function removeDups($number){
    $result = array();
    foreach ($number as $key => $value){
        if(!in_array($value, $result))
            $result[$key]=$value;
    }
    foreach ($result as $val){
        echo "$val <br>";
    }
}