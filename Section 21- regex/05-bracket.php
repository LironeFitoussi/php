<?php
// [abc] will return the first match which is 'a', because the regex is looking for a character that is either 'a', 'b', or 'c'.
// Note: The regex is looking for a character that is either 'a', 'b', or 'c'.

// [ABC] will return the first match which is 'H', because the regex is looking for a character that is either 'A', 'B', or 'C'.
// Note: The regex is looking for a character that is either 'A', 'B', or 'C'.

// [a-c] will return the first match which is 'a', because the regex is looking for a character that is either 'a', 'b', or 'c'.
// Note: The regex is looking for a character that is either 'a', 'b', or 'c'.

// [A-Za-z0-9] will return the first match which is 'H', because the regex is looking for a character that is either a letter or a digit.
// Note: The regex is looking for a character that is either a letter or a digit.

// [!?_] will return the first match which is '!', because the regex is looking for a character that is either '!', '?', or '_'.
// Note: The regex is looking for a character that is either '!', '?', or '_'.

// [A-Za-z0-9!] will return the first match which is 'H', because the regex is looking for a character that is either a letter or a digit or '!'.
// Note: The regex is looking for a character that is either a letter or a digit or '!'. 

// [A-Za-z0-9\d] will return the first match which is 'H', because the regex is looking for a character that is either a letter or a digit or '\d'.
// Note: The regex is looking for a character that is either a letter or a digit or '\d'.

// [^A-Z] will return the first match which is 'a', because the regex is looking for a character that is not an uppercase letter.


header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';
$matches = null;


// '/[0-9]{2} ?[a-z]*/' will return the first match which is '30th', because the regex is looking for two digits followed by an optional space and zero or more lowercase letters.
// Note: The regex is looking for a sequence of two digits, followed by an optional space, and then zero or more lowercase letters.
var_dump(preg_match('/[0-9]{2} ?[a-z]*/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/[bB][a-zA-Z]{5,7}/', $message, $matches));
var_dump($matches);

var_dump(preg_match('/[^a-zA-Z0-9 ]/', $message, $matches));
var_dump($matches);