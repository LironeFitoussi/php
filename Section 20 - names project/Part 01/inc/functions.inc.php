<?php

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * THis function will generate all the letters of the alphabet as an array:
 * ["A", "B", "C", .... "X", "Y", "Z"]
*/
function gen_alphabet() {
    $letters = [];
    for ($i = 65; $i <= 90; $i++) {
        array_push($letters, chr($i)); 
    }
    return $letters;
}

$alphabet =  gen_alphabet();
?>
