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
echo 4+8, "\n";
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

// 14. Математические функции
echo "\n";

$a = 10;
$b = 3;
$ab1 = $a % $b;
echo "$ab1\n";

if ($ab1 === 0)
    echo "Делится ($ab1)\n";
else
    echo "Делится с остатком ($ab1)\n";

$st = pow(2, 10);
echo sqrt(245), "\n";

$numbers = [4, 2, 5, 19, 13, 0, 10];
$powSum = 0;
foreach ($numbers as $i)
    $powSum += pow($i, 2);
echo sqrt($powSum), "\n";

$sqrt1 = sqrt(379);
for ($i = 0; $i < 3; $i++)
    echo round($sqrt1, $i), "\n";

$sqrt2 = sqrt(587);
$ceil1 = ceil($sqrt2);
$floor1 = floor($sqrt2);
$numbers2 = ['floor' => $floor1, 'ceil' => $ceil1];

$numbers3 = [4, -2, 5, 19, -130, 0, 10];
$min1 = min($numbers3);
$max1 = max($numbers3);

echo rand(1, 100), "\n";
$numbers4 = array();
for ($i = 0; $i < 10; $i++)
    $numbers4[$i] = rand(1, 100);

$absDif = abs($a - $b);
$a = 234;
$b = 777;
echo abs($a - $b), "\n";

$numbers5 = [1, 2, -1, 3, -3];
foreach ($numbers5 as &$el)
    $el = abs($el);

$divisions = array();
$num1 = 100;
for ($i = 1; $i < round(sqrt($num1)) + 1; $i++)
    if ($num1 % $i === 0)
        array_push($divisions, $i, $num1 / $i);

$numbers6 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum1 = 0;
$k = 0;
while ($sum1 <= 10) {
    $sum1 += $numbers6[$k];
    $k++;
}
echo $k, "\n";
