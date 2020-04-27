<?php
//3. Объяснить, как работает данный код:

    $a = 5;
    $b = '05';

    var_dump($a == $b);// Почему true?
    # Это сравнение не учитывает тип данных. При сравнении числа и строки, строка будет преобразована в число. 
    var_dump((int)'012345');     // Почему 12345?
    #(int) - приведение строки к целому числу. 
    var_dump((float)123.0 === (int)123.0); // Почему false?
    #у чисел разный тип данных
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    #если в начале строки нет числа, строка будет считаться 0. Оба значения приведены к одному типу, потому true.
    echo '<hr>';

    /*4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. 
    Создать блок переменных в начале страницы.
    Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.*/

    $title = 'PHP';
    $h1 = 'lesson 1';
    $date = date('H:i l, d F Y ');

    $less = <<<html
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>
        </head>
        <body>
        <h1>$h1</h1>
        <p>$date</p>
        
        </body>
    </html>

html;
    echo $less . '<hr>';

    /*5. *Используя только две целочисленные переменные, поменяйте их значение местами.
     Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. 
     Дополнительные переменные использовать нельзя.*/

     $a = 3;
     $b = 1;

     $b = ($a + $b);
     $a = $b - $a;
     $b = $b - $a;

     echo "$a, $b <br>";

     echo 'ИЛИ <br>';

     $a = 3;
     $b = 4;
     
     $a = [$a, $b];
     $b = $a[0];
     $a = $a[1];
     
     echo "$a, $b <hr>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo  $title ?></title>
</head>
<body>
    <h1><?php echo  $h1 ?></h1>
    <p><?php echo   $date ?></p>

    

</body>
</html>
