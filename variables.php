<?php 



$name = 'Daniel';
$age = 30;
$isActive = true;
$height = 174;
$salary = null;

echo $name.'<br>';
echo $age. '<br>';
echo $isActive.'<br>';
echo $height. '<br>';
echo $salary.'<br>';


echo $name. ' - ' .$age. '<br>';
echo "$name - $age <br>";


echo '<br>';

// typeof

echo gettype($name).'<br>';

echo '<br>';
// vardump

var_dump($name, $age, $isActive);
echo '<br>';


is_string($name); //true

is_integer($age); //true


// constants

define('BASE_URL', 'http://localhost/sandbox');

echo BASE_URL.'<br>';

$age = 12313230.24;

echo number_format($age, 3,',', ' ').'<br>';

$text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
 Esse architecto labore veniam facere impedit aut quasi, quaerat ad!
  Fugiat quibusdam officiis unde nostrum adipisci nulla ducimus magnam quo 
  aliquid suscipit.';
  echo '<br>';
  echo '<br>';

  echo $text.'<br>';

  echo nl2br($text);

  echo '<br>';
  //array

  $person = ["Daniel", "Adam","Rune"];

  echo $person[0];


// Associative Array

$associativeArray = ['name' => 'Daniel', 'Age' => 30];

//Nested Arrays

$nested = ['Daniel', ['Preem', 'Maximus'],'Rune'];

echo $nested[1][0].'<br>';

foreach($person as $person) {
    echo $person.'<br>';
}




function greet ($name) {
    echo "hello $name!";

}
greet('Daniel');


