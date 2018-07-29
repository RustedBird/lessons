<?php

/*function checkOdd($array, $param = 'odd')
{
    foreach ($array as $value) {
        if ($param === 'odd') {
            if (!($value % 2)) {
                echo $value . ', ';
            }
        } elseif ($param === 'even') {
            if ($value % 2) {
                echo $value . ', ';
            }
        }
    }
}

$array = range(1, 20);

function checkOddAlt($array, $param = true)
{
    foreach ($array as $value) {
        if ($param && !($value % 2)) {
            echo $value . ', ';
        } elseif (!$param && $value % 2) {
            echo $value . ', ';
        }
    }
}
checkOddAlt($array);
echo '<hr>';
checkOdd($array, 'even');
echo '<hr>';*/


//var_dump($_POST); die;
setcookie('name', 'cookieValue');
//var_dump($_COOKIE); die;
if (isset($_POST)) {
    var_dump($_POST);
    if (isset($_FILES['my_file'])) {
        move_uploaded_file($_FILES['my_file']['tmp_name'], 'uploads/' . $_FILES['my_file']['name']);
        var_dump($_FILES);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>

<div class="col-md-3 p-3">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="e - mail">
        </div>
        <div class="form-group">
            <input type="file" name="my_file">
        </div>
        <div class="form-group">
            <button class="btn">Send form data</button>
        </div>
    </form>
</div>

</body>
</html>

















