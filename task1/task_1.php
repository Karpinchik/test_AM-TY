<?php

// 1. Реализовать два класса: First и Second
// - в результате вызовов функции getClassname() у объекта класса First должно выводиться сообщение "First"
// - в результате вызовов функции getClassname() у объекта класса Second должно выводиться сообщение "Second"
// - в результате вызовов функции getLetter() у объекта класса First должно выводиться сообщение "A"
// - в результате вызовов функции getLetter() у объекта класса Second должно выводиться сообщение "B"
// Суммарно для двух классов должно быть реализовано 3 (три) метода

require 'classes/First.php';
require 'classes/Second.php';

$objClassFirst = new First ();
$objClassSecond = new Second ();

$objClassFirst->getClassname();
$objClassFirst->getLetter();
echo '</br>';

$objClassSecond->getClassname();
$objClassSecond->getLetter();
echo '</br>';

?>
