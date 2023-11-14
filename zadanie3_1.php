<?php

// Шаг 1: Создание константы
define('NUM_E', 2.71828);

// Шаг 2: Вывод значения константы
echo "Число e равно " . NUM_E . "<br>";

// Шаг 3: Присвоение переменной $num_e1 значения константы
$num_e1 = NUM_E;

// Шаг 4: Вывод имени переменной, ее значения и типа
echo "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

// Шаг 5: Изменение типа переменной и вывод типа и значения после каждого изменения
$num_e1 = (string)$num_e1;
echo "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

$num_e1 = (int)$num_e1;
echo "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

$num_e1 = (bool)$num_e1;
echo "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

?>
