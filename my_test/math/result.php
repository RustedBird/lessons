<?php
include '../logics.php';

$correctAnswers = ['answerOne' => 4, 'answerTwo' => 9, 'answerThree' => 12];

function checkAnswer($arrayItem, $answer) {
    if ($arrayItem == $answer) {
        echo "Good! $arrayItem is correct answer" . '<br>';
    } else {
        echo "Oh no! $arrayItem is incorrect answer" . '<br>';
    }
}

foreach ($_SESSION as $key => $value) {
    checkAnswer($value, $correctAnswers[$key]);
}



?>