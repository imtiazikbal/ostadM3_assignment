<?php 

// Task 2: Array Manipulation


// Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumber($n){
    $result = [];
  foreach($n as $value){
    if($value % 2 != 0){
      array_push($result,$value);
    }
  }
    return $result;
}
 $result = removeEvenNumber($numbers);
 print_r($result);

/// vai arek babe korsi akto dekben please 
// <?php 

// $numbers = [1,2,3,4,5,6,7,8,9,10];
// function oddNumber($n){
//     if($n % 2 != 0){
//         return true;
//     }else{
//         return false;
//     }
// }
//  $result = array_filter($numbers, 'oddNumber');
//  print_r($result);