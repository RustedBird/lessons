<?php

function getConnection() {
    try {
        $dbConfig = include('config/db.php');

        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['db']};charset={$dbConfig['charset']}";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        return $pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass'], $opt);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>