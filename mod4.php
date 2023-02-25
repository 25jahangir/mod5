<?php


// live class modiule 04;

//======================================================== indax array ========================
// $category = array('Alu','potol','kola','lebo','tomato');

// echo $category[4];


// $category = array('Alu','potol','kola','lebo','tomato');

// foreach($category as $items){
//     echo "$items <br/>";
// }


// ======================== Associative array ==========================
// json ke php te decode korle associative array paoya jay and associative array ke jodi incode kora hoy tahole json paoya jay


// $signUp = array(
//     "Email" => "programmerjahangir@gmail.com",
//     "Password" => "01234",
//     "Fname" => "MD.Jahangir",
//     "Lname" => "Alam"
// );

// echo $signUp["Email"]; 


// $signUp = array(
//     "Email" => "programmerjahangir@gmail.com",
//     "Password" => "01234",
//     "Fname" => "MD.Jahangir",
//     "Lname" => "Alam"
// );

// foreach($signUp as $property => $value){
//     // echo $property."-".$value."<br/>";
//      n 
// }


// $productlist = array(
//     array('Mobile1','10,000','Redmi1'),
//     array('Mobile2','10,000','Redmi2'),
//     array('Mobile3','10,000','Redmi3'),        // array ('Mobile3','10000','Redmi4//this is the actual value') 
//     array('Mobile4','10,000','Redmi4'),
//     array('Mobile5','10,000','Redmi5'),
//     array('Mobile6','10,000','Redmi6'),
// );

// echo $productlist[5][2]; 

// Multidimensional associative array 

// $productlist = array(
//     array('Mobile1','10,000','Redmi1'),
//     array('Mobile2','10,000','Redmi2'),
//     array('Mobile3','10,000','Redmi3'),        // array ('Mobile3','10000','Redmi4//this is the actual value') 
//     array('Mobile4','10,000','Redmi4'),
//     array('Mobile5','10,000','Redmi5'),
//     array('Mobile6','10,000','Redmi6'),
// );

// foreach($productlist as $eachProduct){
//     foreach($eachProduct as $productItem){
//         echo "$productItem <br/>";
//     }
// }


// $productlist = array('Mobile1','10,00','Redmi1');

// echo count($productlist);       // it use to count how many value use in a array               


// $productlist = array('Mobile1','10,00','Redmi1');

// var_dump(array_reverse($productlist));

// $productlist = array('Mobile1','10,000','Redmi1');

// $key = array_search('Mobile1',$productlist);
// echo "$key";



/* The second live class */ 

// $first_name = "Jahangir";
// $last_name = "Alam";

// $string = "Hello {$first_name} {$last_name}";
// echo $string; 

// String interpolation 


// $fname = "Md Jahangir";
// $lname = "Alam";

// $string =<<<EOD
// Hello Mr {$fname} {$lname}

// EOD;

// echo $string; 
// // heredoc

// $fname = "Md Jahangir";
// $lname = "Alam";

// $string =<<<"EOD"
// Hello Mr {$fname} {$lname}

// EOD;

// echo $string; 
// // newdoc


/* Word count in string */ 

// $string = "programmer Jahangir";
// echo strlen($string);
// echo "\n";









