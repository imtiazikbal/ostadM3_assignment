<?php 

function generatePassword($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ(!@#$%^&*()_+)';
    $password = "";
    for($i = 1; $i <= $length; $i++){
      $password .= $characters[rand(0, strlen($characters) - 1)];
     
    }
    return $password;
}
echo generatePassword(12);