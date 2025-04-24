<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday!';

// '/^H/' will return the first match which is 'H', because the regex is looking for a string that starts with 'H'.
// Note: The regex is looking for a string that starts with 'H'.
var_dump(preg_match('/^H/', $message, $matches));
var_dump($matches);

// '/^\d/' will return 0, because the regex is looking for a string that starts with a digit.
// Note: The regex is looking for a string that starts with a digit.
var_dump(preg_match('/^\d/', $message, $matches));
var_dump($matches);


// '/\d+\.\d+/' will return the first match which is '30.0', because the regex is looking for one or more digits followed by a dot and one or more digits.
// Note: The regex is looking for a sequence of one or more digits, followed by a dot, and then one or more digits.
// This regex will match '30.0' in the string 'hello 123.45 test'.
var_dump(preg_match('/\d+\.\d+/', 'hello 123.45 test', $matches));
var_dump($matches);


// '/^.+@.+\..+$/' will return 1, because the regex is looking for a string that starts with one or more characters followed by '@' and one or more characters followed by '.' and one or more characters.
// Note: The regex is looking for a string that starts with one or more characters, followed by '@', and then one or more characters, followed by '.', and then one or more characters.
// In short, this regex is looking for a valid email address format.
var_dump(preg_match('/^.+@.+\..+$/', 'user@example.com', $matches));
var_dump($matches);

