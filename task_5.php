<?php

// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
function generateRandomPassword( $length ) {

    $lowercase    = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers      = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    $allCharacter = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';

    $password .= $lowercase[rand( 0, strlen( $lowercase ) - 1 )];
    $password .= $uppercase[rand( 0, strlen( $uppercase ) - 1 )];
    $password .= $numbers[rand( 0, strlen( $numbers ) - 1 )];
    $password .= $specialChars[rand( 0, strlen( $specialChars ) - 1 )];

    $lenCount = strlen( $length );

    for ( $i = 0; $i < $lenCount; $i++ ) {
        $password .= $allCharacter[rand( 0, strlen( $allCharacter ) - 1 )];
    }

    $hasLowercase = preg_match( '~[a-z]~', $password );
    $hasUppercase = preg_match( '~[A-Z]~', $password );
    $hasNumber    = preg_match( '~[0-9]~', $password );
    $hasSpecial   = preg_match( '~[!@#$%^&*()_+]~', $password );

    if ( $hasLowercase && $hasUppercase && $hasNumber && $hasSpecial ) {
        echo "$password";
    } else {
        echo "wrong";
    }
    $password = str_shuffle( $password );
    return $password;

}
$password = generateRandomPassword( 12 );
echo $password;
