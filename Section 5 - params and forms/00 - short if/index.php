<?php

$name = 'Jan';

// if ($name == 'Jan') echo "The name is: Jan";
// else echo "The name is not Jan";


// echo ($name == 'Jan') ? "The name is: Jan" : "The name is not Jan";

$array = [
    'ABC',
    ($name == 'Jan') ? "The name is: Jan" : "The name is not Jan",
];

var_dump($array);