<?php
    declare(strict_types=1); // this will enforce strict types in the file, so we can't pass a string to a function that expects an int, for example
    header('Content-Type: text/plain');

    class BankAccount {
        function __construct(
            public string $nr,
            public string $holder,
            public float $balance
        ) {}

        function printBalance() {
            echo "The balance of account #{$this->nr} is: {$this->balance} $\n";
        }

        function transfer(BankAccount $to, float $amount = 0) {
            if ($this->balance < $amount) {
                echo "Not enough money in account #{$this->nr} to transfer {$amount} $\n";
                return;
            }
            $this->balance -= $amount;
            $to->balance += $amount;
            echo "Transferred {$amount} $ from account #{$this->nr} to account #{$to->nr}\n";
        }
    }

    $account1 = new BankAccount('216054563131', 'John Doe', 1000.00);
    $account1->printBalance(); // this will print the balance of the account

    $account2 = new BankAccount('216054563132', 'Jane Doe', 500.00);
    $account2->printBalance(); // this will print the balance of the account

    $account1->transfer($account2, 200.00); // this will transfer 200 $ from account1 to account2

    $account1->printBalance(); // this will print the balance of the account
    $account2->printBalance(); // this will print the balance of the account