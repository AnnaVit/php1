<?php
/*
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
*/
echo 'Задание 1' . '<br>';

$i = (int)0;
$a = (int)100;
$j = (int)3;

while($i <= $a-$j){
    
    $i+=$j;
    echo $i . ' ';
}
echo '<hr>';

$i = (int)0;
$a = (int)100;
while($i <= $a){
    $i++;
    if($i % 3 == 0 ){
        echo $i . ' ';
    }

}
echo '<hr>';

/*
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
*/
echo 'Задание 2' . '<br>';
$c = (int)0;
$d = (int)10;

function number(int $a, int $b){
    do{
     if($a == 0){
        echo $a . '-ноль <br>';
        $a++;
     }elseif($a % 2 == 0){
        echo $a . '-четное число <br>';
        $a++;
     }else{
         echo $a . '-нечетно число <br>';
         $a++;
     }       
    }while($a <= $b);

}

number($c, $d);

echo '<hr>';


/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
 а в качестве значений – массивы с названиями городов из соответствующей области.
 Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
*/
echo 'Задание 3' . '<br>';

$region = [
    'Московская область' => ['Москва', 'Зеленоград','Клин','Красногорск'],
    'Ленинградская область' =>['Санкт-Петербург', 'Всеволожск','Павловск','Кронштадт'],
    'Рязанская область' =>['Касимов','Кораблино','Михайлов','Новомичуринск'],
];
    foreach($region as $key => $value){
 
        echo "<br>{$key}: <br>" ;
        
        foreach($value as $keyCity => $valueCity){
             echo "{$valueCity}, ";
            
            if($keyCity == (count($value) - 1)){
                echo "{$valueCity} " ;
            }            
        }
    };

echo '<hr>';

/*
4. Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/
echo 'Задание 4' . '<br>';
$alphabet = [
    'a' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'x' => 'h', 'ц' => 'c', 'ч' => 'ch','ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 
    'ы' => 'y', 'ь' => '`', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'    
];
    echo strtr( 'тест', $alphabet) . '<br>';
    echo strtr( 'место', $alphabet )  . '<br>';
    echo strtr( 'перепиши, если останется время', $alphabet )  . '<br>';
    echo '<hr>';

/*

5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/
echo 'Задание 5' . '<br>';

$a = 'Мне надоело торчать дома';

function replace(string $b){
    $string = str_replace( ' ', '_', $b);
    return $string;
}

echo replace($a);
echo '<hr>';
/*
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
Необходимо представить пункты меню как элементы массива и вывести их циклом. 
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

сделано в другом файле 


*/

/*
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}*/
echo 'Задание 7' . '<br>';

for( $f = 0; $f <= 9; print $f, $f++){

};
echo '<hr>';
/*
8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».*/

echo 'Задание 8' . '<br>';

$region = [
    'Московская область' => ['Москва', 'Зеленоград','Клин','Красногорск'],
    'Ленинградская область' =>['Санкт-Петербург', 'Всеволожск','Павловск','Кронштадт'],
    'Рязанская область' =>['Касимов','Кораблино','Михайлов','Новомичуринск'],
];


$z = 'К';

    foreach($region as $key => $value){
            
            echo "<br>{$key}: <br>" ;

        foreach($value as $keyCity => $valueCity){
            
            $flag = strncasecmp($valueCity, $z , 2);
            if ($flag == 0){
                  echo "{$valueCity}, ";
            }               
        }
    };

echo '<hr>';


/*9. *Объединить две ранее написанные функции в одну,
 которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания
  (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/
echo 'Задание 9' . '<br>';

    function translate( string $word = 'я хочу спать но это не точно'){
      
        $alphabet = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
            'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm',
            'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch','ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 
            'ы' => 'y', 'ь' => '`', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'   
        ];

        $wordArr = explode( ' ', $word);
        $translateArr = [];
        foreach($wordArr as $trWord){
            
            $letters = str_split($trWord, 2);

            $translateWord = '';
            
            foreach($letters as $letter){
                
                if(isset($alphabet[$letter])){
                    $translateWord .= $alphabet[$letter];                    
                }else{                    
                    $translatedWord .= $letter;
                }
            }
            array_push($translateArr, $translateWord);

        }

        $finalString = implode("_", $translateArr);
        return  $finalString;

}

    
    echo translate();
    echo translate('светало');

    echo '<hr>';