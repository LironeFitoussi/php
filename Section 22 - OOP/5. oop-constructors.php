<?php
    declare(strict_types=1); // this will enforce strict types in the file, so we can't pass a string to a function that expects an int, for example
    header('Content-Type: text/plain');

    class BankAccount {
        public string $nr;
        public string $holder;
        public float $balance;

        function __construct(string $nr, string $holder, float $balance = 0) {
            $this->nr = $nr;
            $this->holder = $holder;
            $this->balance = $balance;
        }

        function printBalance() {
            echo "The balance of account #{$this->nr} is: {$this->balance} $\n";
        }
    }

    $account1 = new BankAccount('216054563131', 'John Doe', 1000.00);
    $account1->printBalance(); // this will print the balance of the account
