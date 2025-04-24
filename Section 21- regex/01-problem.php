<?php

header('Content-Type: text/plain; charset=utf-8');

$message = 'Happy 30th Birthday! Best wishes php@example.com!';

for ($x = 0; $x < 120; $x++) {
    var_dump(strpos($message, $x));
}