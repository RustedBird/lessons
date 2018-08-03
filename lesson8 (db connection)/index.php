<?php

$host = '127.0.0.1';
$db   = 'lesson8_db';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->query('SELECT * FROM student');

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);

    echo "<br>connected<br>";
} catch(PDOException $e) {
    die("Подключение не удалось: " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 8 db_connection</title>
</head>
<body>

</body>
</html>
