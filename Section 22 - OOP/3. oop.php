<?php
    declare(strict_types=1); // this will enforce strict types in the file, so we can't pass a string to a function that expects an int, for example
    header('Content-Type: text/plain');

    class BankAccount {
        public string $nr;
        public string $holder;
        public float $balance;

        function printBalance() {
            echo "The balance of account #{$this->nr} is: {$this->balance} $\n";
        }
    }

    $account1 = new BankAccount();
    $account1->nr = '216054563131'; 
    $account1->holder = 'John Doe';
    $account1->balance = 1000.00;

    var_dump($account1); // this will be an object of class BankAccount with properties: nr, holder, balance, something, 

    $account1->printBalance(); // this will print the balance of the account

    $account2 = new BankAccount();
    $account2->nr = '216054563132';
    $account2->holder = 'Jane Doe';
    $account2->balance = 2000.00;

    $account2->printBalance(); // this will print the balance of the account