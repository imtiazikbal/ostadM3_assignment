<?php

// Task 4: Multidimensional Array


// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.



$student = [

    "student1" => ["math" => 85, "english" => 90, "science" => 95],
    "student2" => ["math" => 22, "english" => 9, "science" => 2],
    "student3" => ["math" => 85, "english" => 90, "science" => 95],
];

function average( $student ) {
    foreach ( $student as $studentIndex => $grades ) {

        $total   = array_sum( $grades );
        $count   = count( $grades );
        $average = number_format(  ( $total / $count ), 2 );
        if ( $average >= 80 || $average <= 100 ) {
            echo "$studentIndex " . " - Grade: A+" . PHP_EOL;
        } elseif ( $average >= 70 ) {
            echo "$studentIndex " . " - Grade: A" . PHP_EOL;
        } elseif ( $average >= 60 ) {
            echo "$studentIndex " . " - Grade: A-" . PHP_EOL;
        } elseif ( $average >= 50 ) {
            echo "$studentIndex " . " - Grade: B" . PHP_EOL;
        } elseif ( $average >= 40 ) {
            echo "$studentIndex " . " - Grade: C" . PHP_EOL;
        } elseif ( $average >= 33 ) {
            echo "$studentIndex " . " - Grade: D" . PHP_EOL;
        } else {
            echo "$studentIndex " . " - Grade: F" . PHP_EOL;
        }
    }

}

average( $student );