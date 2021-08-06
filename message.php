<?php

require_once "cookie.php";


session_start();
if (array_key_exists("username", $_SESSION)) {
$username = $_SESSION["username"];
$a = file_get_contents("allmessages.txt");
}
$allmessage= json_decode($a , true);
if ($allmessage !== null) {
$allmessage["user"] = array_slice($allmessage["user"],-100);
}

function messageshow($allmessage){
    if ($allmessage !==null) {
foreach ($allmessage["user"] as $key => $value) {
?><div class="container"><div class=" d-inline-block bg-primary text-white m-2 p-2 rounded"><?php foreach ($value as $x => $m) {
    echo nl2br($x . ":" . "\t" . $m  . "\n");
} ?> </div> </div> <?php
}
}
}

?>