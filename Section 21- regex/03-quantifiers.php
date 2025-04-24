<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';

$matches = null;


// '/\d*/' will return the first match which is '', because the regex is looking for zero or more digits, and an empty string is a valid match.
// The regex '/\d*/' will match the empty string at the start of the string, so it returns an empty string.
var_dump(preg_match('/\d+/', $message, $matches));
var_dump($matches);

// '/\d+/' will return the first match which is '30', because the regex is looking for one or more digits, and '30' is a valid match.
// Note: The regex is looking for a sequence of one or more digits.
var_dump(preg_match('/\d*/', $message, $matches));
var_dump($matches);

// '/\d+ ?th/' will return the first match which is '30th', because the regex is looking for one or more digits followed by an optional space and 'th'.
// Note: The regex is looking for a sequence of one or more digits, followed by an optional space, and then 'th'.
var_dump(preg_match('/\d+ ?th/', $message, $matches));
var_dump($matches);

// '/\w{5}/' will return the first match which is 'Happy', because the regex is looking for exactly 5 word characters.
// Note: The regex is looking for a sequence of exactly 5 word characters (letters, digits, or underscores).
var_dump(preg_match('/\w{5}/', $message, $matches));
var_dump($matches);

// '/\w{5,}/' will return the first match which is 'Happy', because the regex is looking for 5 or more word characters.
// Note: The regex is looking for a sequence of 5 or more word characters (letters, digits, or underscores).
var_dump(preg_match('/\w{6,}/', $message, $matches));
var_dump($matches);