<?php
// loop start here epi 01
// for($i = 1; $i<20; $i+=2){   // (in the middle the condition it's call itretion)
//     echo $i;
//     echo PHP_EOL;  
// }

// live class 


// for($i = 1; $i < 50 ; $i=$i + 5){
    
//     echo "video - $i \n";
// }


// "break " it work for stop the loop whcih is i indecate to stop the position 

// for($i = 10; $i <= 100; $i = $i + 5){
//     echo "Video - $i \n";

//     if($i==90){
//         break;               
//     }
// }




// "continue" is work for scap a value which i indecate to scape 

// for($i = 10; $i <= 100; $i = $i + 5){

//     if($i == 50){
//         continue;
//     }
//     echo "Video - $i \n";
   
// }

// for($x = 0; $x <= 100; $x++){

//     echo "The Number is : $x </br>";
// }

///////////////////// Now Foreach loop /////////////////////////////

// foreach loop use the array 

// $allCity = array ('Dhaka','Cumilla','Dinajpur','khulna','Barishal','Chadpur');  // array means callection of data

// foreach($allCity as $oneByOne){
//     echo "$oneByOne \n";
// }

// $groupLeader = array('Shipon','Shaon','Sojib','Tanvir','Raju','Saidur');

// foreach($groupLeader as $showMe){
//     echo "$showMe \n";
// }


// $villageName = array ('Charpathalia','Hasnabad','Joynagar','Soyani','Mohiskhola','Dorikanddi','Korimabad');

// foreach($villageName as $ektaKoreShowKoro){
//     echo "$ektaKoreShowKoro \n";
// }
// echo PHP_EOL;
// $comillaUpazila = array('Meghna','Goripur','Chandina','Gojariya','Titas');

// foreach($comillaUpazila as $ShowMeOneByOne){

//     if("Goripur" == $ShowMeOneByOne){
//         continue;
//     }
//     echo "$ShowMeOneByOne \n";

// }

// $friends = array('Shipon','Shamim','Saimun','Rajib','Emon','');


// $groupLeader = array('Shipon','Shaon','Sojib','Tanvir','Raju','Saidur');

// foreach($groupLeader as $showMe){
    
    
//     echo "$showMe \n";
//     if("Sojib" == $showMe){
//         break;
//     }
// }


// $groupLeader = array('Shipon','Shaon','Sojib','Tanvir','Raju','Saidur');

// foreach($groupLeader as $showMe){
    
    
//     echo "$showMe \n";
//     if("Sojib" == $showMe){
//         continue;
//     }
// }

/* ============================= (Live class) While loop =================================== */

// for($i= 0 ; $i < 100; $i = $i + 2){
//     echo "$i- video \n";
// }

// $i= 0;

// while($i < 100){

//     echo "$i - video \n";

//     $i = $i+ 2;
// }

// $i = 0;
// while($i < 20){
//     echo "$i - video \n" ;

//     $i = $i + 10;
// }

// $i= 3;
// while($i < 50){
//     echo "$i - video \n";
   
//     $i = $i + 2;
//     if()
// }
/* ============================= (Live class) do While loop =================================== */

// $i = 0;

// do{
//     echo "$i - video \n";
//     $i = $i +1;

// }while($i<100);





// for($i=1; $i<10; $i++){
//     echo $i;
//     echo PHP_EOL;
//     for($j=0; $j<$j++){
//         echo "*";
//     }
// }


// $i = 0;
// while($i<=40){
//     $i+=1;
//     echo $i.PHP_EOL;
// }



// $i=0;
// do{
//   $i++;
//   echo $i.PHP_EOL;  
// }while($i<5);


// $i = 1;
// do {
//     $i = $i + 1;
//     echo "This is Do while loop -$i \n";

// }while($i <= 100);



// $i=0;
// a: $i++;
// echo $i.PHP_EOL;
// if($i<10) goto a;


///// Epi - 02 

// for($i = 20; $i >= 0; $i--){
//     echo $i;
//     echo PHP_EOL;
// }


// for($i = 10; $i >= 0; $i-=1){
//     echo $i.":".(10-$i);
//     echo PHP_EOL;
// }

// for($i = 10,$j=1; $i >= 0; $i-=1,$j++){
//     echo $i.":".$j;
//     echo PHP_EOL;
// }

// for($i = 10,$j=1; $i >= 0; $i-=1,$j++){
//     echo $i.":".(11-$i);
//     echo PHP_EOL;
// }

//100 er moddhe jei sonkha gulu 7 and 11 dara vag jay tader ke devide print koro by for loop

// for($i = 0; $i<100; $i++){
//     if ($i % 7 == 0) echo $i. "\n";
//     if ($i % 11 == 0) echo $i. "\n";
// }

// for( $i = 1 ; $i < 100; $i++){
//     if($i%5 == 0) echo $i. "\n";
//     if($i % 8 ==0 ) echo $i. "\n";
// }



// for($i = 0; $i<100; $i++){
//     echo $i % 7 ==0 ? $i. "\n":'';
//     echo $i % 11 == 0 ? $i. "\n":'';
// }

// for($i = 0, $j = 0; $i < 100; $i += 7, $j += 11){
//     echo $i. "\n";
//     echo $j < 100 ? $j. "\n":"";
// }

// for($i = 1 , $j = 1; $i < 100, $j <200; $i += 2 , $j += 4){
//     echo $i. "\n";
//     echo $j. "\n";
   
// }

// epi 04 

// $i = 0;
// while ($i<5){
//     echo $i;
//     echo PHP_EOL;
//     $i++;
// }
// echo "\n";

// $j=0;
// while($j++ <5){
//     echo $j;
//     echo PHP_EOL;
// }


// Function of live class   [function kei methord bola hoy]
// [()] it's call parenthases like a door  and {} it's call function er body.
// function addTwoNumber(){

//         $number = 20;
//         $number1 = 30;
//         $result = $number + $number1;
//         echo $result;
// }

// addTwoNumber();



// function AddTwoNumber($number1,$number2){

//         $resultvalue = $number1 + $number2;
//         echo ($resultvalue);

        

// }

// addTwoNumber(20,50);
// echo PHP_EOL;
// addTwoNumber(288,50); // baire theke jei value gula input decchi agulo ke bola hoy pera metter pass kora.


// function writeStudentName($name){

//         echo "$name".",";
// }


// writeStudentName("jahangir");
// echo "\n";
// writeStudentName("shipon");

// function addTwoNumber (){
//     $number1 = 20;
//     $number2 = 30;
//     $number3 = $number1 + $number2;
//     return $number3;
// }


// echo addTwoNumber();


// function addTwoNumber (){
//     $number1 = 20;
//     $number2 = 30;
//     $number3 = $number1 + $number2;
//     return $number3;
// }



// echo addTwoNumber()+1;

// function addTwoNumber($first,$second){

//     $third = $first + $second;

//     return $third;
// }

// echo addTwoNumber(500,600)+300;

// nested use case of function 

// function F1(){
//     return "MD JAHANGIR ALAM";
// }



// function F2(){
//     return F1();
// }
// function F1(){
//     return "This is the first function";
// }




// function F3(){
//     return F2();
// }


// echo F3();


// php recursive function //

// function display($number){
//     if($number <= 5){
//         echo "$number <br>";
//         display($number+1);
//     }
// }
// display(1);

// Live Class 2 

// $students = [
//     [
//         'name' => 'Md Alamgir Hossian',
//         'age' => 45
//     ],
//     [
//         'name' => 'Md Dilber Hossian',
//         'age' => 40
//     ],
//     [
//         'name' => 'Md Soraf Hossian',
//         'age' => 35
//     ],
//     [
//         'name' => 'Md Morad Hossian',
//         'age' => 32
//     ],
//     [
//         'name' => 'Md Saidur Hossain',
//         'age' => 30
//     ],
//     [
//         'name' => 'Raju',
//         'age' => 26
//     ],
//     [
//         'name' => 'Md Jahangir Alam',
//         'age' => 24
//     ]
// ];


// foreach($students as $student){
//     displayBrotherName($student);             // abong jokhon ami actual data pass korbo tokhon segulo hobe argument
// }

// function brotherName($variable){         // function ar bodyr moddhe jei variable gula thakbe segulo holo pera metter 

//     // echo $variable['name']."</br>".$variable['age']."</br>";
//     echo "{$variable['name']} </br> $variable['age']} </br>";
// }

// function displayBrotherName($st){
//     echo "{$st['name']} </br> {$st['age']} </br>"; //  This is right way to show the variable it's call String interpolation
// }



// function greet($name, $title){
//     echo "{$name} {$title} <br/>";
// }

// greet("Md","Jahangir");


// function greet($name,$title = "MD"){
//     echo "{$title} {$name} <br/>";
// }

// greet("Jahangir");
// greet("Jahangir", "Muhammad."); // it's call override 


// function greet(string $name, $title = "MD"){        // if i use  string,array, int before the variable at that time it's call type hint
//     echo "{$title} {$name} <br/>";
// }

// greet();
 
// Optional perametter  have to learn more in youtube or google  about how to pass unlimited argument



// function process($n,$n1,$n2){
//     echo count(func_get_args());
// }

// process(1,2,3);
/* function er modde koto gula pera metter pass kora hocche ta nirnoy korar jonno count(func_get_args()) use kora hoy */

// function process(...$n) {
//     echo count(func_get_args());
// }

// process(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

// function shipon(...$n){
//     echo count(func_get_args());
// } 
// shipon(2,3,4,5);
// $data = 12;
// function process(){
//     echo "$data";
// }

// process();


// $data =12;
// function process(){
//     global $data;
//     $data +=4;
//     echo $data;
//     echo "\n";
    
// }


// process();

// echo $data;



// function process(int $number):int{
//     $number = $number*$number;
//     return $number;
// }



// echo process(4);


// dhoren apni ekti software banaben jekhane joto jon in korbe ta count korbe

// function visit(){               
//     static $visit = 0;   // static mane holo joma kore rakha // [static scope]
//     $visit++;
//     echo "$visit \n";
// }




// visit();
// visit();
// visit();
// visit();
// visit();



// php 8 
// named argument 

// function displayProfile($name, $gender, $title = "Mr."){
//     echo "{$title}{$name} {$gender} \n";
// }


// displayProfile(gender:"M",name:"Jahangir Alam");   // named argument 





/* This step is use for printing a data type many more */ 

// echo str_repeat("I Love you \n",50);

// echo str_repeat("My name is Jahangir \n",40);



/*  This part are use for define the string first name and last name */

// $name = "Jahangir Alam";

// $parts = explode(" ",$name);
// echo $parts[0];
// echo "\n";
// echo $parts[1];




// kono ekta array ke sundor vhabe print korar jonno array code ar age and pore echo "<pre>" ; echo "</pre>";

// $student = [
//     'name' => 'Md Jahangir Alam',
//     'age' => 24
// ];

// foreach($student as $key=>$value){
//     echo $key . "=" . $value. "\n";
// }



// we can write and include extra file in html 

// // include_once(file path);

// heardoc 

// echo >>> abcd

// write here anything

// abcd;

// for extra learning php manual/ heardoc
