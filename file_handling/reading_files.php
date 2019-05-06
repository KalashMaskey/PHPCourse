<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){

echo $content = fread($handle,/*12*/ filesize($file)); //Eah bite equals a character

    fclose($handle);
}
else {
    echo " Could not be written";
}





?>