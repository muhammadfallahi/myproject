<?php

require_once "signinvalidation.php";

$user = fopen("users.txt","r");
$data = fread($user,filesize("users.txt"));
fclose($user);
$array = json_decode($data , true);


$signinusername = $_POST["Username"];
$pass =$_POST["password"];
$signinpassword = md5($pass);



if ($signinusername == $array["user"][$signinusername]["Username"] && $signinpassword == $array["user"][$signinusername]["password"]) {
    session_start();
    $_SESSION["username"] = $signinusername;
    header("location: chat.php");
}
else{

    setcookie("signinusername" , $signinusername); // for used it in another page
    setcookie("signinpassword" , $signinpassword); // for used it in another page
    header("location: signin.php"); 
}
