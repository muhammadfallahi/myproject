<?php
require_once "cookie.php";

$user = fopen("users.txt","r");
$data = fread($user,filesize("users.txt"));
fclose($user);
$array = json_decode($data , true);

$signinusername =null;
$signinpassword = null;

if (array_key_exists("signinusername",$_COOKIE)) {
    $signinusername = $_COOKIE["signinusername"];
}

if (array_key_exists("signinpassword",$_COOKIE)) {
    $signipassword = $_COOKIE["signinpassword"];
}

function userinvalid($signinusername ,$array){
    if (array_key_exists("signinusername",$_COOKIE)) {
        if (array_key_exists($signinusername,$array["user"])) {
            unsetcookie("signinusername");
            return "valid username";
    }
    else{
        unsetcookie("signinusername");
        return "invalid username";
    }
    }
}




function passinvalid($signinpassword ,$signinusername ,$array){
    if (array_key_exists("signinpassword",$_COOKIE)) {
        if (array_key_exists($signinusername,$array["user"])){
            $signinpassword = md5($_COOKIE["signinpassword"]);
            if (array_key_exists($signinpassword,$array["user"])){
                unsetcookie("signinpassword");
                return "valid password";
            }
            else{
                unsetcookie("signinpassword");
                return "invalid password";
            }
    }
   
    }
    }


