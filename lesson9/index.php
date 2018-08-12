<?php

include 'components/db.php';

$dbConnection = getConnection();

if (isset($_POST['send'])) {

    try {
        $success = true;
        $sth = $dbConnection->prepare("INSERT INTO student (name, age, university_id) VALUES (:name, :age, :university_id)");
        $result = $sth->execute([
            'names' => $_POST['name'],
            'age' => $_POST['age'],
            'university_id' => $_POST['university_id']]);

        if ($result) {
            $message = 'Пользователь добавлен';
        } else {
            $message = 'Ошибка добавления пользователя';
            $success = false;
        }

        if (isset($_GET['success'])) {
            echo  $message;
        }
    } catch(PDOException $e) {
        if (isset($_GET['success'])) {
            echo  $message;
        }
        echo $e->getMessage();
    }
};

if (isset($_GET['success'])) {
    echo $_GET['message'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form class="jumbotron" method="post">
        <input class="my-2 px-2 col-md-4 offset-md-4" type="text" name="name" placeholder="Name">
        <input class="my-2 px-2 col-md-4 offset-md-4" type="text" name="age" placeholder="age">
        <select class="my-2 px-2 col-md-4 offset-md-4" name="university_id">
            <option value="1">DGMA</option>
            <option value="2">DITM</option>
            <option value="3">SLAVPED</option>
            <option value="4">OXFORD</option>
        </select>
        <input class="my-2 px-2 col-md-2 offset-md-5" name="send" type="submit" value="send">
    </form>
</div>

</body>
</html>