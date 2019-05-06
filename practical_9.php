<?php session_start();


$_SESSION['practicalSession'] = "numbers";
if(isset($_SESSION['practicalSession'])){

    echo $_SESSION['practicalSession'];

}

else{
    die;
    echo 'conecction failed';
}

$name= "practical";
$value = 20;
$expiration = time() + (60*60*24*7);

setcookie("practical",$value,$expiration);

if(isset($_COOKIE["practical"])){

    echo $_COOKIE["practical"];

}

else{
    
    echo 'conecction failed';
}


?>











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
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
    
    ?>
    <a href="practical_9.php?id=200">Click here</a>
</body>
</html>