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

    function greetings($message){

        echo $message;

    }


    greetings("Namaste");

    echo "<br>";

    function calculateAdd($number1, $number2)
{
    $sum = $number1 + $number2;
    echo $sum;
}

calculateAdd(89,26);
    ?>
</body>
</html>