<?php

// 1. Доступ по ссылке

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order .= '!!!';

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

// 2. Числа
echo "\n";

$numberInt = 500;
echo $numberInt;
echo "\n";
$numberFloat = 231.455;
echo $numberFloat;
echo "\n";
echo 4+8;
echo "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;

// 11. Умножение и деление
echo "\n";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / 4;
echo $days_per_language;

// 12. Степень
echo "\n";

echo 8**2;

// 13. Операторы присвоения
echo "\n";

$my_num = 230;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;