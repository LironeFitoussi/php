<?php 
    header('Content-Type: text/plain');
    // require __DIR__ . '/01-without%20copy.php';
    // Task 3:
    $account1 = [
        'nr' => '216054563131',
        'holder' => 'John Doe',
        'balance' => 1000.00
    ];

    $account2 = [
        'nr' => '216054563132',
        'holder' => 'Jane Doe',
        'balance' => 2000.00
    ];

    function print_balance(array $account) {
        echo "Account number: {$account['nr']}\n";
        echo "Account holder: {$account['holder']}\n";
        echo "Account balance: {$account['balance']}\n";
    }

    function transfer(array &$from, array &$to, float|int $amount) {
        if ($from['balance'] >= $amount) {
            $from['balance'] -= $amount;
            $to['balance'] += $amount;
            echo "Transferred {$amount} from {$from['holder']} to {$to['holder']}.\n";
        } else {
            $missingAmount = $amount - $from['balance'];
            echo "Insufficient funds in {$from['holder']}'s account.\n";
            echo "Needs {$missingAmount} more to complete the transfer.\n";
        }
    }

    print_balance($account1);
    print_balance($account2);
    //! print_balance([]); // This will not work as expected, as the function expects an array with specific keys,
    // but it will not throw an error.

    transfer($account1, $account2, 500.00);
    print_balance($account1);
    print_balance($account2);
    transfer($account1, $account2, 2000.00);
?>