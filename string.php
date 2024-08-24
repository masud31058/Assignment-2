<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = 'aeiouAEIOU';
    $count = 0;
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if (strpos($vowels, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

function reverseString($str) {
    return strrev($str);
}

foreach ($strings as $string) {
    
    $vowelCount = countVowels($string);
    
    $reversedString = reverseString($string);
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
