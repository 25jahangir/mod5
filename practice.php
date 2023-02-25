
<?php



function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

echo "\n";
function myName($fname, $year) {
    echo "$fname Alam . Born in $year \n";
}

myName("MD Jahangir", "1999");

function add(int $one, int $two){
    return $one + $two;

   
    
}

echo add(50 , "300 days");
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days"); 