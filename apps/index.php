<?php

$host = 'db'; // Service name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

try {
    $connectionString = \sprintf(
        'mysql:host=%s;dbname=%s;charset=utf8mb4',
        $host,
        $db
    );
    $conn = new PDO(
        $connectionString,
        $user,
        $password
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo 'Connected successfully';
} catch (\PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
