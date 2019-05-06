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
