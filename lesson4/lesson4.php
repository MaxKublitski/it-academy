<?php

//создать функцию, которая принимает ваше имя и выводит его посимвольно
//(каждый символ на новой строке)

function nameCutter($name){
    $name = mb_convert_encoding($name, 'UTF-8');
    $arr = str_split($name);
    foreach ($arr as $value){
        echo $value, '<br>';
    }
}
echo nameCutter('Maksim Максим');
print '<br>';

//создать функцию которая принимает размерность массива и значение,
//которым надо заполнить массив

function arrayHunter($size, $value){
    $a = array_fill(0, $size, $value);
    print_r($a);
}

echo arrayHunter(50, 'qwerty');
print '<br>' . '<br>';

//создать функцию, которая принимает название месяца и
//выводит на экран количество дней в нем

function monthHunter($month)
{
    if ($month == 'Jan')
        $month = 1;
    elseif ($month == 'Feb')
        $month = 2;
    elseif ($month == 'Mar')
        $month = 3;
    elseif ($month == 'Apr')
        $month = 4;
    elseif ($month == 'May')
        $month = 5;
    elseif ($month == 'Jun')
        $month = 6;
    elseif ($month == 'Jul')
        $month = 7;
    elseif ($month == 'Aug')
        $month = 8;
    elseif ($month == 'Sep')
        $month = 9;
    elseif ($month == 'Oct')
        $month = 10;
    elseif ($month == 'Nov')
        $month = 11;
    elseif ($month == 'Dec')
        $month = 12;
    else
        echo 'Input correct month name';

    echo cal_days_in_month(CAL_GREGORIAN, $month, 2019);

}

echo monthHunter('Feb');
print '<br>' . '<br>';

//создать функцию, которая принимает текст, считает количество гласных
//в нем в возвращает массив в формате гласные буквы - ключи и их
//количество в тексте) текст передаем на английском

function textHunter($txt){
    echo 'Количество гласных в тексте "' . $txt . '" - ' .preg_match_all('/[aeiouy]/i', $txt, $matches,PREG_PATTERN_ORDER);
    echo '<br>';
    echo 'Количество символов в тексте: ';
    print_r (array_count_values($matches[0]));
}

echo textHunter('I bite this fucking function it was so hard and so simple at the same time');

print "<br>";


//создать функцию, которая выводит позиции всех символов a в переданном тестке в обратном порядке.


function txtReverse1($txt){
    $l = strlen($txt)-1;
    for ($i = 0; $i < $l/2; $i++) {
        $b = $txt[$i];
        $txt[$i] = $txt[$l - $i];
        $txt[$l - $i] = $b;
    }
    echo $txt . '<br>';
}

echo txtReverse1('Hello World');

function txtReverse2($txt){
    echo strrev($txt);
}

echo txtReverse2('Mama im going home');

//написать функцию, которая принимает массив и выводит его
//используя двойной цикл for и функцию count. Функция должна выводить
//значения массива через пробел, а после вывода первой строки, должен
//быть переход на новую строчку пример:
//1 1 1 1 1
//5 5 5 5 5
//7 7 7 7 7

$array = array(
    array (1,1,1,1,1),
    array (5,5,5,5,5),
    array (7,7,7,7,7)
);

$counter = count($array);

function pillar($array){
    $counter = count($array);
    for($key = 0; $key < $counter; $key++){
        print '<br>';
        $secCounter = count($array[$key]);
        for ($key2 = 0; $key2 < $secCounter; $key2++){
            echo $array[$key][$key2], ' ';}
}
}

echo pillar($array);

echo '<br>';

//Создать массив размером N x N (например 5 на 5) и заполнить
//его следующим образом.
//Используя функцию 6 (вывода массива)вывести созданный массив
//1 1 1 1 1
//2 2 2 2 2
//3 3 3 3 3
//4 4 4 4 4
//5 5 5 5 5


$array = array(
    array (1,1,1,1,1),
    array (2,2,2,2,2),
    array (3,3,3,3,3),
    array (4,4,4,4,4),
    array (5,5,5,5,5)
);

echo pillar($array);
echo '<br>';

