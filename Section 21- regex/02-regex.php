<?php

header('Content-Type: text/plain');

$message = 'Happy 30th Birthday 20 ab!';

$findings = [];
// "/\d/" is equivalent to "/[0-9]/"
var_dump(preg_match('/\d\d/', $message, $findings));
var_dump($findings);

// "/\D/" is equivalent to "/[^0-9]/"
var_dump($findings);

// "/\w/" is equivalent to "/[a-zA-Z0-9_]/"
var_dump(preg_match('/\w/', $message, $findings));
var_dump($findings);


// var_dump(preg_match_all('/\d\d/', $message, $findings));
// var_dump($findings);

// /\d\d\s\w\w/ is equivalent to "/[0-9][0-9] [a-zA-Z][a-zA-Z]/"
var_dump(preg_match_all('/\d\d\s\w\w/', $message, $findings));
var_dump($findings);

// /\d\dth/ is equivalent to "/[0-9][0-9]th/"
var_dump(preg_match_all('/\d\dth/', $message, $findings));
var_dump($findings);