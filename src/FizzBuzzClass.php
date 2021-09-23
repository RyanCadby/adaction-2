<?php

class FizzBuzz {
    
    public function calculateFizzBuzz($start = 1, $limit = 20) {
        if( empty($limit) || !is_int($limit) || empty($start) || !is_int($start) || $start > $limit ){
            return false;
        }
        $fizzBuzzArr = array();
        for( $i = $start; $i <= $limit; $i++ ){
            // get boolean values for num divisibility
            $divideThree = ( 0 === $i % 3 ); 
            $divideFive = ( 0 === $i % 5 ); 

            // check for digit three in number
            if( preg_match('/3+/', $i ) ){
                $fizzBuzzArr[] = 'lucky';
                continue;
            }

            // print number if not evenly divisible
            if( !$divideThree && !$divideFive ){
                $fizzBuzzArr[] = $i;
                continue;
            }

            // check if divisible and add text
            if( $divideThree && $divideFive ){
                $fizzBuzzArr[] = 'fizzbuzz';
            } elseif( $divideThree ){
                $fizzBuzzArr[] = 'fizz';
            } elseif( $divideFive ){
                $fizzBuzzArr[] = 'buzz';
            }
        }
        return $fizzBuzzArr;
    }
}