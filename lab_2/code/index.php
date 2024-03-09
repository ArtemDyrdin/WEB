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

// 15. Функции
echo "\n";

function printStringReturnNumber(): int
{
 echo "printStringReturnNumber()\n";
 return 100500;
}

$my_num = printStringReturnNumber();
echo $my_num, "\n";

// 16. Функции
echo "\n";

function increaseEnthusiasm(string $str): string
{
    return "$str!";
}
echo increaseEnthusiasm("привет"), "\n";

function repeatThreeTimes(string $str): string
{
    return $str.$str.$str;
}
echo repeatThreeTimes("Absolute"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("Brake")), "\n";

function cut(string &$str, int $length = 10)
{
    $str = substr($str, 0, $length);
}
$str1 = "1234567890";
cut($str1, 3);

$numbers7 = [1, 2, 3, 4];
function rec_numbers(array $numbers) {
    if (empty($numbers))
        return;
    echo $numbers[0];
    rec_numbers(array_slice($numbers, 1));
}
rec_numbers($numbers7);
echo "\n";

function find_less_nine(int $number): int
{
    while ($number > 9) {
        $sum = 0;
        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }
        $number = $sum;
    }
    return $number;
}
echo find_less_nine(987), "\n";

// 17. Массивы
$numbers8 = ['x', 'xx', 'xxx', 'xxxx'];
function arrayFill(string $word, int $count)
{
    $nums = array();
    for ($i = 0; $i < $count; $i++)
        $nums[$i] = $word;
    echo $nums[$count-1], "\n";
}
arrayFill('x', 5);

$numbersX2 = [[1, 2, 3], [4, 5], [6]];
$sum2 = 0;
foreach ($numbersX2 as $numbersX1)
    foreach ($numbersX1 as $el)
        $sum2 += $el;
echo $sum2, "\n";

$numbersX2_2 = array();
$numbersX1_2 = array();
for ($i = 1; $i < 10; $i++) {
    if ($i % 3 !== 0)
        $numbersX1_2[] = $i;
    else {
        $numbersX1_2[] = $i;
        $numbersX2_2[] = $numbersX1_2;
        $numbersX1_2 = [];
    }
}
echo $numbersX2_2[2][1], "\n";

$numbers9 = [2, 5, 3, 9];
$result = $numbers9[0]*$numbers9[1] + $numbers9[2]*$numbers9[3];
echo $result, "\n";

$user = ['name' => 'Artem', 'surname' => 'Dyrdin', 'patronymic' => 'Yurevich'];
echo "{$user['surname']} {$user['name']} {$user['patronymic']}\n";

$date = ['year' => 2024, 'month' => 3, 'day' => 9];
echo "{$date['year']}-{$date['month']}-{$date['day']}\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "\n";

echo end($arr), prev($arr), "\n";

// 18. Design of if-else
echo "\n";

function less_more(int $a, int $b): bool
{
    return $a+$b>10;
}
echo less_more(5, 6), "\n";

function equal(int $a, int $b): bool
{
    return $a === $b;
}
echo equal(5, 5), "\n";

$test = 0;
if (!$test)
    echo 'верно';

echo "\n";

$age = 99;
if ($age < 10 or $age > 99)
    echo "$age < 10 or $age > 99", "\n";
else {
    $sum = 0;
    while ($age != 0) {
        $digit = $age % 10;
        $sum += $digit;
        $age = (int)($age / 10);
    }
    if ($sum <= 9)
        echo "сумма цифр однозначна ($sum)";
    else
        echo "сумма цифр двузначна ($sum)";
    echo "\n";
}

$arr = [1, 2, 3];
if (count($arr) === 3)
    echo $arr[0] + $arr[1] + $arr[2], "\n";
