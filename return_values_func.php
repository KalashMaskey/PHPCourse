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

    function calculateAdd($num1, $num2){
        
        $sum = $num1 + $num2;

        return $sum;

    }

    $result = calculateAdd (25,95);
    $result = calculateAdd(125, $result);

    echo $result;







    ?>


</body>
</html>