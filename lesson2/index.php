<?php

echo 'Lesson 2';

$array = [1, 2, 'name' => 'Philipp', 4, 5, 6];

for ($i = 0; $i < count($array); $i++) {
    echo '<pre>';
    echo $array[$i] . '<br>';
    echo '</pre>';
}

foreach ($array as $key => $value) {
    if ($key === 0) {
        echo '<pre>';
        echo  "Key: $key, Value: $value";
        echo '</pre>';
        break;
    }
}
$i = 10;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

do {
    echo "i = $i <br>";
    $i++;
} while ($i < 10);
echo '<hr>';


$a = 5;
$b = 2;

/**
 * Function for placing number into some degree
 *
 * @param int $num
 * @param int $degree
 * @return int
 */
function myPow (int $num, $degree = 2) {
    $result = $num ** $degree;
    return $result;
}

echo myPow(3);





