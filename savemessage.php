<?php


session_start();
$username = $_SESSION["username"];

$a = file_get_contents("$username.txt");
$allmessage = json_decode($a , true);


$message = $_POST["message"] . "\t" . date("h:i");


if (strlen($message) > 100) {
    setcookie("messageerror", "toolongcharacter");
    header("location: chat.php");
    exit;
}


// setcookie("message",$message);

$allmessage["$username"][date("h:i:s")]=$message;
$json = json_encode($allmessage);
file_put_contents("$username.txt" ,$json);

//save all message with different username

$b = file_get_contents("allmessages.txt");
$allmessage2 = json_decode($b , true);

$allmessage2["user"][]["$username"]= $message;
$json2 = json_encode($allmessage2);
file_put_contents("allmessages.txt" ,$json2);





header("location: chat.php");
exit;
?>


