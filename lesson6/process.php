<?php

//echo 'Lesson 6' . '<hr>';

if (isset($_POST['send'])) {
    $requestData = [
        'name' => $_POST['name'],
        'message' => $_POST['message']
    ];

    $filePath = 'counter.txt';

    if (file_exists($filePath)) {
        $data = unserialize(file_get_contents($filePath));
    }

    if (!$data) {
        $data = [];
    }

    array_push($data, $requestData);

    file_put_contents($filePath, serialize($data));

    /*if ($data) {
        foreach ($data as $value) {
            echo '<p>My name is ' . $value['name'] . ' My message is  ' . $value['message'] . '</p>';
        }
    }*/

    header("Location: http://lessons/lesson6/index.php");

//    header("Location: " . "http://" . $_SERVER['HTTP_HOST']);



//    foreach ($data as $value) {
//        echo '<p>My name is '. $value['name'] . ' My message is  ' . $value['message'] . '</p>';
//    }
}

/*
    $fp = fopen('counter.txt', 'a');

//$myText = 'Эту строку необходимо заполнить';

    $test = fwrite($fp, serialize($data));

    /*if ($test) {
        echo 'Данные успешно занесены';
    } else {
        echo 'Ошибка при записи';
    }*/
/*
    fclose($fp);

    header("Location: " . "http://" . $_SERVER['HTTP_HOST']);
};

$myFile = fopen('counter.txt', 'a+');

$messages = fread($myFile, filesize('counter.txt'));

fclose($myFile);

$arrayMessages = unserialize($messages);

var_dump($arrayMessages);
echo "Name: $arrayMessages[name] Message: $arrayMessages[message]";
*/
?>