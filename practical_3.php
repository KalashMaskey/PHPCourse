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
    
    if (1==2){
        echo "The final string is not this";
    }
    
    elseif (2 != 4){
        echo "I Love PHP <br>";
    }
    

    for ($i=0; $i<10; $i++) {
        echo $i; 
    }


    switch ($num= 1){
        
        case 1:
            echo "<br> 4statments left";
            break;
        case 2:
            echo "3 statments left";
            break;
        case 3:
            echo "2 statments left";
            break;
        case 4:
            echo "1 statments left";
            break;
        case 5:
            echo "0 statments left";
            break;
        default:
            echo "None of the above";
    }    
    ?>
</body>
</html>