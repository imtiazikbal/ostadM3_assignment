<?php 

$grades= [85, 92, 78, 88, 95];

function descending($grades){
    rsort($grades);
    return $grades;
}

print_r(descending($grades));