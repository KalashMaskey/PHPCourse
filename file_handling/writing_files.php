<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){

    fwrite($handle, 'Writing PHP');

    fclose($handle);
}
else {
    echo " Could not be written";
}





?>