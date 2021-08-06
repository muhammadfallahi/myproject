<?php

// require_once "validation.php";


$data = file_get_contents("users.txt");

$array = json_decode($data , true);


$inputs = $_POST;
$username = $_POST["Username"];  // put signup username in variable for checking repeated
$email = $_POST["email"];  // put signup email in variable for checking repeate

foreach ($array["user"] as $key => $value) {
    if ($username == $array["user"][$inputs["Username"]]["Username"] || $email == $array["user"][$key]["email"]) {
        setcookie("username" , $username); // for used it in another page
        setcookie("email" , $email); // for used it in another page
        $json = json_encode($array);
        file_put_contents("users.txt", $json);
        header("location: signup.php");
        exit;
    }
}

$inputs["password"] = md5($inputs["password"]);

$array["user"][$inputs["Username"]] = $inputs;

$json = json_encode($array);

file_put_contents("users.txt", $json);

header("location: signup.php");
exit;

?>