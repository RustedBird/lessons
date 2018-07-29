<?php
include 'process.php';

$filePath = 'counter.txt';

$data = unserialize(file_get_contents($filePath));

if ($data) {
    foreach ($data as $value) {
        echo '<p>My name is ' . $value['name'] . ' My message is  ' . $value['message'] . '</p>';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <title>Lesson 6</title>
</head>
<body>
<div class="container-fluid">
    <div class="container jumbotron">
        <form action="process.php" method="post">
            <p><input class="px-2" type="text" name="name" placeholder="name"></p>
            <p><input class="px-2" type="text" name="message" placeholder="message"></p>
            <input type="submit" name="send" value="send">
        </form>
    </div>
</div>
</body>
</html>




