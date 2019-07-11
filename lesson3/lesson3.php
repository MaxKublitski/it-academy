<?php
//Написать функцию вывода массива которая принимает 2 параметра (массив и символ для вывода)
//Функция должна анализировать каждый элемент массива и если он является массивом, то должна вызывать
//себя еще раз
$arr = [1,1,1,1,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]];

function arrayDisp($array, $symbol){
    foreach($array as $value){
        if (is_array($value)){
            $symbol .= '-';
            arrayDisp($value, $symbol);
        } else {
            echo $symbol, $value, '<br>';
        }
    }
}

echo arrayDisp($arr, ' ');