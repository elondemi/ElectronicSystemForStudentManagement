<?php
$location = "doc.txt";


function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Custom error:</b> [$errno] $errstr<br>";
    echo " Error on line $errline in $errfile<br>";
}

set_error_handler("myErrorHandler");


if(!file_exists($location)){
    trigger_error("Ka ndodhyr nje error i thjeshte.");
}
else{
    $myfile = fopen($location, "r");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
}
}

restore_error_handler();

