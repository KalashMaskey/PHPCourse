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

    function practical(){
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2; 
        return $sum;
    }

    $theSum = practical();
    echo $theSum . "<br>";


    function message($namaste){
        echo $namaste;
    }
    message("Greetings");
    ?>
</body>
</html>