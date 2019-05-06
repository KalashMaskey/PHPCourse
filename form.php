<?php

    if(isset($_POST['submit'])){

        $name = ['Kalash', 'Radhesh', 'Shakir'];
        $maximum = 10;


        $username = $_POST['username'];
        $password = $_POST['password'];
    
         if(strlen($username) < 5){
            echo "Should contain less than 10 words";
        }

   

    if(!in_array ($username, $name)){
        echo "Try again";
    }
    else{
        echo "welcome";
    }
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

    <form action="form.php" method="post">

        <input type="text" placeholder="Enter Name" name="username">
        <br>
        <input type="password" placeholder="Enter Password" name="password">
        <br>
       <input type="submit" name="submit">
    </form>
</body>
</html>