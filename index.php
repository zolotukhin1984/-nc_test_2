<?php

//Дан массив случайных чисел. Вывести все числа, которые повторяются
//больше одного раза.

require_once __DIR__ . '/Repetions.php';

$rep = new Repetions([1, 1, 3, 2, 3, 3]);
$rep->getWhereMoreOne();

var_dump($rep->moreOne);