<?php 

//Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog";


function takesArgument($text){
    echo $text;
}
takesArgument($text);

echo PHP_EOL;

//Convert the string to all lowercase.
$text1 = "The quick brown fox jumps over the lazy dog";
$lowerCase = strtolower($text1);
echo $lowerCase;
echo PHP_EOL;



//Replace the word "brown" with "red".
$text2 = "The quick brown fox jumps over the lazy dog";
$replace = str_replace("brown", "red", $text2);
echo $replace;

?>