<?php

require_once "cookie.php";

$messageerror = null;

if (array_key_exists("messageerror", $_COOKIE)) {
$messageerror = $_COOKIE["messageerror"];
}

function messageerror(){
if (array_key_exists("messageerror", $_COOKIE)) {
    unsetcookie("messageerror");
    return "must less than 100 character";
}
}