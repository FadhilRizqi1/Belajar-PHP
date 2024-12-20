<?php
//Variable Scope / Lingkup Variabel

$x = 10;

function tampilx(){
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;

?>