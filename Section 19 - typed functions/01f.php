<?php
    header("Content-Type: text/plain");
    function add_five(int $number) {
        // var_dump(gettype($number));
        return $number + 5;
    };

    $id = $_GET['id'] ?? 0;
    var_dump(add_five($id));
?>