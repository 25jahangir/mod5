<?php


// class MyClass{
//  function __construct($msg){
//     echo "$msg";
//  }
// }

// $obj = new MyClass("I am constructor");
// echo "\n";
// $obj = new MyClass("I am a valuable person");


// class etaclass{
//     public $name = "Jahangir";
//     protected $age = "24";
//     private $city = "Comilla";
// }

// $etaObject = new etaclass();

// echo $etaObject->name;     // ok
// echo "\n";
// echo $etaObject->age;  // Error
// echo $etaObject->city; // Error



// class etaClass{
//     public function name($name){
//         echo $name;
//     }
//     protected function age($age){
//         echo $age;
//     }
    
//     private function city($city){
//         echo $city;
//     }
// }


// $objectVariable = new etaClass();

// $objectVariable ->name("MD JAHANGIR ALAM");
// echo "\n";
// $objectVariable ->age("24");      // Error cause it's protected
// $objectVariable ->city("ZURIT");  // Error case it's private. it's works only the class

// Access Modifire 
// protected

// class mc{
//     protected $num1 = 20;
//     protected $num2 = 30;

//     public function addTwo(){
//         $num3 = $this->num1 + $this->num2;
//         echo $num3;
//     }
// }

// $ob = new mc();

// $ob->addTwo();


// Static Methord 
// Static methrod can be called directly without creating an instance of the class first

// class mc{
//     static function addTwo(){
//         $num = 20;
//         $num1 = 50;
//         $num2 = $num + $num1;
//         echo $num2;
//     }
// }

// mc::addTwo();   //[::] it's call scope regolation property 


// class staticMC{
//     public static $citylist = array(
//         'Dhaka',
//         'Rangpur',
//         'Rajshahi'
//     );
// }


// echo staticMC::$citylist[0];

// Inheritance 


// class Father{
//     function addTwo(){
//         $n1= 10;
//         $n2 = 20;
//         $n3 = $n1 * $n2;
//         echo $n3;
//     }
// }

// class son extends Father{}

// $ob = new son();

// $ob->addTwo();


// Inheritance Overrride


class Father{
    function addThree(){
        $shipon = 24;
        $taha = 5;
        $ariful = 7;
        $total = $shipon + $taha + $ariful;
        echo $total;

    }
}

class son extends Father{

    // methord overriding
    function addfour(){
        $shipon = 24;
        $taha = 5;
        $ariful = 7;
        $abeer = 9;
        $total =$abeer + $shipon + $taha + $ariful;
        echo $total;
    }
}



$object = new son();

$object->addfour();

//                             Abstract Class

// abstract class Father{
//     function addfour(){
//           $shipon = 24;
//         $taha = 5;
//         $ariful = 7;
//         $abeer = 9;
//         $total =$abeer + $shipon + $taha + $ariful;
//         echo $total;
//     }
// }


// class son extends Father{
//     function addfour(){
//         $shipon = 24;
//       $taha = 5;
//       $ariful = 7;
//       $abeer = 9;
//       $total =$abeer + $shipon + $taha + $ariful;
//       echo $total;
//   }

// }

// // this is correct 

// $object = new son();
// $object ->addfour();


// //                              this will    incorrect 
// $object = new Father();
// $object->addfour();

// class Mc{
//     public $name;
//     public $age;


//     // methord a class called person

//     public function sayHello(){
//         echo "Hello My name is ". $this->name . " and I am " . $this->age . "year old";
//     }


// }

// $object = new Mc();

// $object->name = "Jahangir";
// $object->age = 24;

// $object ->sayHello();

