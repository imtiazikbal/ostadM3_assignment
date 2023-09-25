<?php 
$studentGrades = [
    ["math" => 85,"english" => 90,"science" => 95],
    ["math" => 80,"english" => 90,"science" => 95],
    ["math" => 50,"english" => 60,"science" => 95],
];

function studentGrades($studentGrades){
    foreach($studentGrades as $studentIndex => $grades){
        $total = array_sum($grades);
        $average = $total / count($grades);
        $_aver = number_format($average, 2);
        echo "Student " . ($studentIndex + 1) . " - Average Grade: " .  $_aver . PHP_EOL;      
}
}

echo studentGrades($studentGrades);