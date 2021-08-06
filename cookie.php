<?php

function unsetcookie($name){
    setcookie($name , $_COOKIE["$name"] , time() -1);
}


?>
