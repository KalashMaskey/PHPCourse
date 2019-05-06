<?php 

class Car{

    // --Create a variable inside a class --

    static $wheels = 4;
    var $engine = 1;
    var $doors = 4;

/* -- Static-Modifier
    function Move(){
        Car::$wheels = 12;
    } */

// -- Methods-- //


    /*function MoveWheels(){

        $this->wheels = 2;
        // echo "Moving Wheels";
    }

    function CreateDoor(){
        $this->doors = 2;
    }*/

    



/*---- creating instance---

$kia = new Car();   // $toyota = new Car();
$kia->MoveWheels();
$truck = new Car();
echo $truck->wheels = 12 . "<br>" ;
echo $kia->wheels;*/



// $kia->MoveWheels();
// $toyota->MoveWheels();



// ---- To check whether a method/class exists or not---
// if(method_exists("car","MoveWheels")){
//     echo "The Method Exists";
// }

// else{
//     echo "nope";
// }


/* --- Inheritance -- 
class Plane extends Car {

    var $engine = 4;


}

$jet = new Plane();
echo $jet->engine;
*/



//----Constructor---

/*function __construct  (){

    echo $this->wheels = 10;
}




$truck = new Car();*/

}
/*--Static Modifier ---
Car::Move();

echo Car::$wheels; */


?>