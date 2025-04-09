<?php

var_dump("I'm the inc/a.php file");
var_dump(__DIR__);
include 'b.php';
include __DIR__ . '/b.php';