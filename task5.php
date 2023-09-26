<?php

// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.



function generateRandomPassword( $length = 12 ) {

    $lowercase    = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers      = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $password = '';

    for ( $i = 0; $i < $length; $i++ ) {
        $charSet = rand( 1, 4 );

        if ( $charSet == 1 ) {

            $password .= $lowercase[rand( 0, strlen( $lowercase ) - 1 )];
        } elseif ( $charSet == 2 ) {

            $password .= $uppercase[rand( 0, strlen( $uppercase ) - 1 )];
        } elseif ( $charSet == 3 ) {

            $password .= $numbers[rand( 0, strlen( $numbers ) - 1 )];
        } elseif ( $charSet == 4 ) {

            $password .= $specialChars[rand( 0, strlen( $specialChars ) - 1 )];
        }
    }

    $password = str_shuffle( $password );

    return $password;
}

$randomPassword = generateRandomPassword();

echo $randomPassword;
