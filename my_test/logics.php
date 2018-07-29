<?php

if (isset($_POST['send'])) {
    session_start();
    $_SESSION[$_POST['testNumber']] = $_POST['answer'];
}
?>

