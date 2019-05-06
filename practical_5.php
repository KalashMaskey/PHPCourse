<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
    
        $string = "This is a practical test to check the pre built function";
        


        echo pow(95,2); //MathFunction
        echo "<br>";

       
        echo strlen ($string); //StringFunction

        echo "<br>";

        $practical = [100,2000,35000,9,25,100000, $string]; //ArrayFunction
        $found = in_array($string, $practical);

        if($found){
            echo "Found";
        }

        else{
            echo "Find again";
        }




   ?> 
</body>
</html>  