<?php

    header('Content-Type: text/plain');

    class BankAccount {
        public string $nr;
        public string $holder;
        public float $balance;
    }

    $account1 = new BankAccount(); //althought params are not set, they are still created and can be assigned values
    $account1->nr = '216054563131'; 
    $account1->holder = 'John Doe';
    $account1->balance = 1000.00;

    /**
     * @param BankAccount $account
     * * @return void
     */

    function print_balance(BankAccount $account) {
        echo "Account number: {$account->nr}\n";
        echo "Account holder: {$account->holder}\n";
        echo "Account balance: {$account->balance}\n";
    };

    var_dump($account1);

    print_balance($account1);

    // print_balance([]); // This will not work as expected, as the function expects an array with specific keys,
