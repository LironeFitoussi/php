<?php
    declare(strict_types=1); // this will enforce strict types in the file, so we can't pass a string to a function that expects an int, for example
    header('Content-Type: text/plain');

    class BankAccount {
        public string $nr;
        public string $holder;
        public float $balance = 0; // we can assign a default value to a property, so it will be initialized with that value when the object is created
        
        public $something; // we can specify any type of property, even an array or an object but this is not recommended
    }

    $account1 = new BankAccount();
    $account1->something = []; // we can assign anything to a property, even an array or an object
    // $account1->nr = (stirng) 123456789; // thanks to strict types this will throw an error if we try to assign a string to a property that expects an int
    $account->nr = '516853';
    var_dump($account1); // this will be an object of class BankAccount with properties: nr, holder, balance, something, 
    // but the three first ones will be "uninitialized" (empty) because we didn't assign any value to them yet
    var_dump($account1->nr); // this will throw an error because the property nr is not initialized yet

