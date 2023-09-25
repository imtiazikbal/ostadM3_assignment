<?php 

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

