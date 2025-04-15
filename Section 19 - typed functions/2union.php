<?php 

    header("Content-Type: text/plain");

    function add_five(float | int $number) {
        // var_dump(gettype($number));
        return $number + 5;
    };

    $id = $_GET['id'] ?? 0;
    // echo "Result: " . add_five((int)$id) . "\n";

    var_dump(add_five(3.14));
    var_dump(add_five(5));

?>