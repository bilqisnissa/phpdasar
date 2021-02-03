<?php
//lingkup variable
//
$x = 10;

function showX(){
    global $x;
    echo $x;
}

showX();

?>