<?php

echo 'Lesson 3';

$str = 'Иванов Иван Иванович';
$array = explode(' ', $str);
echo '<pre>';
var_dump($array);
echo '</pre>';

$string = implode(' ', $array);
echo '<pre>';
var_dump($string);
echo '</pre>';

$str1= '      Philipp Vlasov                   ';
$str2= '                         ';

$a = strlen($str2);

echo '<pre>';
echo $a . '<br>';
echo $str2 . '<br>';
$a = trim($str2);
echo gettype($str2) . '<br>';
echo var_dump($a) . '<br>';
echo gettype($a) . '<br>';
echo '</pre>';

echo '<hr>';

$str = 'Привет, меня зовут Вася';

echo md5(md5($str));

echo '<hr>';

echo str_replace('Привет', 'Пока', $str);

echo '<hr>';

echo strlen('Привет') . '<br>';
echo mb_strlen('Привет') . '<br>';

$str = 'Привет, мир!';

echo mb_substr($str,-4, -2);

echo '<hr>';

echo '<a href="google.com">asdasdasdas</a><br>';
echo htmlspecialchars('<a href="google.com">asdasdasdas</a>') . '<br>';






