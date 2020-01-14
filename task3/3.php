<?php
// 3. Реализовать консольный скрипт на php, который в качестве параметра будет принимать строку из разделённых между собой натуральных чисел.
// Выводит этот же массив отсортированный в порядке возрастания.
// Во входной строке числа разделены как минимум одним пробелом, в сортировке участвуют только числа
// Пример команды в консоли - php 3.php “1 -2 -3 4 5 -6f ss3 0 0 0 -0 0.0 0.05”
// Результат: -3 -2 0 1 4 5

// $in = '1 -2 -3 4 5 -6f ss3 0 0 0 -0 0.0 0.05';
$in = fgets(STDIN);
$filter_explode = explode(" ", $in);
$list_end = [];

foreach ($filter_explode as $key) {
  if (is_numeric($key)){
    $i = intval($key);
    array_push($list_end, $i);
  }
}

$list_end = array_unique($list_end);
sort($list_end);
$result = implode(" ", $list_end);
print $result . "\n";

?>
