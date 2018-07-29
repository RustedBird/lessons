<?php
include '../logics.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page three</title>
</head>
<body>
<form action="result.php" method="post">
    <h2>10 + 2 = ?</h2>
    <input type="text" name="answer">
    <input type="submit" name="send" value="next">
    <input type="hidden" name="testNumber" value="answerThree">
</form>
</body>
</html>
