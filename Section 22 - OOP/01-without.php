<?php 
header('Content-Type: text/plain');

$account1 = [
    'nr' => '216054563131',
    'holder' => 'John Doe',
    'balance' => 1000.00
];

function print_balance($account) {
    echo "Account number: {$account['nr']}\n";
    echo "Account holder: {$account['holder']}\n";
    echo "Account balance: {$account['balance']}\n";
}

?>