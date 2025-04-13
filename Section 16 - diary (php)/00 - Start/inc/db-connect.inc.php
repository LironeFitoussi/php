<?php
    $servername = "localhost";
    $username = "root";
    $password = "baba1234";
    $socket = "/tmp/mysql.sock";

    // Create connection
    $pdo = new mysqli($servername, $username, $password, "diary", 3306, $socket);

    // Check connection
    if ($pdo->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>