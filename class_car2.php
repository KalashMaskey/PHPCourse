<?php

class Dog{
    
    var $tail = 1 ;
    var $eyes = 2 ;
    var $legs = 4 ;

    function ShowAll(){

        echo $this->tail . "<br>";
        echo $this->eyes. "<br>";
        echo $this->legs. "<br>";
       
    }
}


    $pitbull = new Dog();
    $pitbull->ShowAll();



?>