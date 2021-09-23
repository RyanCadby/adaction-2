<?php
require "../src/FizzBuzzClass.php";

// instantiate class
$fizzBuzzStr = new FizzBuzz();
$fizzBuzzPub = $fizzBuzzStr->calculateFizzBuzz(1, 40);

// print string
if( !empty($fizzBuzzPub) ){
    echo implode( ' ', $fizzBuzzPub );
}
