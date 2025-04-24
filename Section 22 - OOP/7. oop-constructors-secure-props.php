<?php
    declare(strict_types=1); // this will enforce strict types in the file, so we can't pass a string to a function that expects an int, for example
    header('Content-Type: text/plain');

    class BankAccount {
        function __construct(
            private string $nr,
            private string $holder,
            private float $balance
        ) {}

        function getBalance(): float {
            return $this->balance;
        }

        function setBalance(float $balance): void {
            if ($balance < 0) {
                echo "The balance can't be negative\n";
                return;
            }
            $this->balance = $balance;
        }

        function getNr(): string {
            return $this->nr;
        }

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

    var_dump($account1->getBalance()); // this will return the balance of the account
    var_dump($account1->getNr()); // this will return the number of the account
    var_dump($account1->setBalance(2000.00)); // this will set the balance of the account to 2000.00
    var_dump($account1->getBalance()); // this will return the balance of the account

    $account1->transfer($account2, 200.00); // this will transfer 200 $ from account1 to account2
    $account1->printBalance(); // this will print the balance of the account
    $account2->printBalance(); // this will print the balance of the account