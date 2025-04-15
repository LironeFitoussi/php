<?php
    header("Content-Type: text/plain");
    function print_x5(string $msg) {
        echo "{$msg}\n";
        echo "{$msg}\n";
        echo "{$msg}\n";
        echo "{$msg}\n";
        echo "{$msg}\n";
    }

    print_x5(555);


    function sum_prices(array $prices): float {
        $total = 0;
        foreach ($prices as $price) {
            if (!is_numeric($price)) {
                throw new InvalidArgumentException("All elements in the array must be numeric.");
            }
            $total += $price;
        }
        return $total;
    }

    // Example usage:
    $prices = [19.99, 5.49, 3.50];
    echo "Total: " . sum_prices($prices);
?>