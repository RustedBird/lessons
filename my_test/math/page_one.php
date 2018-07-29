<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page one</title>
</head>
<body>
    <form action="page_two.php" method="post">
        <h2>2 + 2 = ?</h2>
        <input type="text" name="answer">
        <input type="submit" name="send" value="next">
        <input type="hidden" name="testNumber" value="answerOne">
    </form>
</body>
</html>

<?php
