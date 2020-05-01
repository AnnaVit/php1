<?php 
/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.*/
echo 'Задание 1.<br>';

$a = random_int(-100,100);
$b = random_int(-100,100);
//$a = -3;
//$b = 5;
echo $a . '<br>';
echo $b . '<br>';

if($a >= 0 and $b >= 0)
{
    $c = $a - $b;
    echo 'Оба числа положительные.<br>';
    echo "Разность чисел {$a} и {$b} равна {$c} <hr>";
}
elseif($a < 0 and $b < 0)
{
    $c = $a * $b;
    echo 'Оба числа отрицательные.<br>';
    echo "Произведение чисел {$a} и {$b} равно {$c} <hr>";
    
}
elseif($a >= 0 xor $b >= 0)
{
    $c = $a + $b;
    echo 'Числа имеют разные знаки.<br>';
    echo "Сумма чисел {$a} и {$b} равна {$c} <hr> ";
    
}


/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.*/
echo 'Задание 3.<br>';

function sum($arg1, $arg2)
{
    $sumNum = $arg1 + $arg2;
    return $sumNum;   
}

function minus($arg1, $arg2)
{
    $minNum = $arg1 - $arg2;
    return $minNum;   
}
function times($arg1, $arg2)
{
    $timNum = $arg1 * $arg2;
    return $timNum;   
}
function division($arg1, $arg2)
{
    $divNum = $arg1/$arg2;
    return $divNum;   
}

echo 'Сумма чисел ' . sum(2, 4) . '<br>';
echo 'Разность чисел ' . minus(2, 4) . '<br>';
echo 'Произведение чисел ' . times(2, 4) . '<br>';
echo 'Деление чисел ' . division(4, 2) . '<br>';
echo '<hr>';
/*
4. Реализовать функцию с тремя параметрами:
function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
echo 'Задание 4.<br>';
function mathOperation($arg1, $arg2, $operation)
{
    switch($operation){
        case 'plus':
            return sum($arg1, $arg2);
            break;
        case 'minus':
            return minus($arg1, $arg2);
            break;
        case 'times':
            return times($arg1, $arg2);
            break;
        case 'division':
            return division($arg1, $arg2);
            break;
        default:
            return "Неверно заданы параметры";
            break;
    }
}
echo 'Сумма чисел ' . mathOperation(2, 4, 'plus') . '<br>';
echo 'Разность чисел ' . mathOperation(8, 4, 'minus') . '<br>';
echo 'Произведение чисел ' . mathOperation(8, 4, 'times') . '<br>';
echo 'Деление чисел ' . mathOperation(8, 4, 'division') . '<br>';
echo 'При ошибке: ' . mathOperation(8, 4, 'fdfdfg') . '<br>';


echo '<hr>';




/*6. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

echo 'Задание 6.<br>';
function power($arg1, $arg2)
{   
    if($arg2 == 0){
        return 1;
    }else{
        return $arg1 * power( $arg1, $arg2 - 1); 
    }          
}
echo power(2,4);
echo '<hr>';

/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате
с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/
echo 'Задание 7.<br>';

$time = date('G:i');
//echo $time;

$hm = explode(':', $time);

$a = $hm[0];
$b = $hm[1];

$hour = ' часов ';
$min = ' минут ';

if( $a == 1 || $a == 21){
    $hour = ' час '; 
}
if ($a%10 == 2 || $a%10 == 3 || $a%10 == 4){
    $hour = ' часа ';
}
if($b%10 == 1){
   $min = ' минута '; 
}
if($b%10 == 2 || $b%10 == 3 || $b%10 == 4 ){
   $min = ' минуты '; 
}

echo "{$a}{$hour}{$b}{$min}";

echo '<hr>';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--5. Посмотреть на встроенные функции PHP.
Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.-->
    <h3>Задание 5</h3>
    <footer><?=strftime("%A, %m %h, %G")?></footer>
    <p><?=strftime("%R")?><p>
</body>
</html>
