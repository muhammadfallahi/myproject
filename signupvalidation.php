
<?php

require_once "cookie.php";


$user = fopen("users.txt","r");
$array = null;
if (filesize("users.txt")>0) {
$data = fread($user,filesize("users.txt"));
fclose($user);
$array = json_decode($data , true);
}

$username = null;
$email = null;

if (array_key_exists("username",$_COOKIE)) {
$username = $_COOKIE["username"];
}
if (array_key_exists("email",$_COOKIE)) {
$email = $_COOKIE["email"];
}



function emailvalidation($email ,$array){
    if ($array !== null) {
    foreach ($array["user"] as $key => $value) {
if ($email == $array["user"][$key]["email"]){
    unsetcookie("email");
    unsetcookie("username");
    return "the email is valid";
}
}
}
}


function uservalidation($username ,$array){
    if (array_key_exists("username",$_COOKIE)) {
    if (array_key_exists($username,$array["user"])) {
    if ($username == $array["user"][$username]["Username"]){
        unsetcookie("username");
        unsetcookie("email");
        return "the username is valid";
    }
    }
}
}





?>