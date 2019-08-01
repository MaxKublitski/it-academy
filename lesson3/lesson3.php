<?php
//Написать функцию вывода массива которая принимает 2 параметра (массив и символ для вывода)
//Функция должна анализировать каждый элемент массива и если он является массивом, то должна вызывать
//себя еще раз
$arr = [1,1,1,1,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]];

function arrayDisp($array, $symbol){
    foreach($array as $value){
        if (is_array($value)){
            echo $symbol, $value, '<br>';
            ++$value;
            arrayDisp($value, $symbol);
        } else {
            echo $value, '<br>';
        }
    }
}

echo arrayDisp($arr, '-');


echo '<br>', '<br>';

//написать функцию, которая принимает массив и выводит его используя
//двойной цикл for и функцию count.
//Функция должна выводить значения массива
//через пробел, а после вывода первой строки, должен быть
//переход на новую строчку пример:
//2 2 2 2 -1
//2 2 2 -1 0
//2 2 -1 0 0
//2 -1 0 0 0
//-1 0 0 0 0

$arr = [2,2,2,2,-1,2,2,2,-1,0,2,2,-1,0,0,2,-1,0,0,0,-1,0,0,0,0];
$counter = count($arr);

function arrayTyping($arr){
    for($key = 0; $key < 5; $key++){
        echo $arr[$key], ' ';
    }print '<br>';

    for($key; $key < 10; $key++){
        echo $arr[$key], ' ';
    }print '<br>';

    for($key; $key < 15; $key++){
        echo $arr[$key], ' ';
    }print '<br>';

    for($key; $key < 20; $key++){
        echo $arr[$key], ' ';
    }print '<br>';

    for($key; $key < 25; $key++){
        echo $arr[$key], ' ';
    }
 }

echo arrayTyping($arr) . '<br>', '<br>';



// верное решение:

$arr = array(
    array(2,2,2,2,-1),
    array(2,2,2,-1,0),
    array(2,2,-1,0,0),
    array(2,-1,0,0,0),
    array(-1,0,0,0,0),
);


function arrayTyping2($arr){
    $counter = count($arr);
    for($key = 0; $key < $counter; $key++){
        print '<br>';
        $secCounter = count($arr[$key]);
        for ($key2 = 0; $key2 < $secCounter; $key2++){
            echo $arr[$key][$key2], ' ';}
}
}

echo arrayTyping2($arr);
print '<br>';