<?php
//присваиваем переменным значения из формы
$numberA = $_POST['numberA'];
$numberB = $_POST['numberB'];
$numberC = $_POST['numberC'];

//проверка первых двух полей формы на заполнение
if (!empty($numberA) && !empty($numberB)){
    echo "Data is correct";
} else {
    echo "Please, fill in the empty fields", "<br>", '<a href="/">Please, back to previous page</a>';
}

//вывод переменной POST
echo "<pre>";
var_dump($_POST);

//сравнить полученные данные и вывести какое из чисел большее
echo "Максимальное значение - ", max(array($numberA, $numberB, $numberC)), "<br>";

//сравнить данные и вывести какое из чисел меньшее
echo "Минимальное значение - ", min(array($numberA, $numberB, $numberC)), "<br>";

//посчитать и вывести сколько из чисел = 0
if ($numberA == 0){
    $zeroArray[0] = $numberA;
}

if ($numberB == 0){
    $zeroArray[1] = $numberB;
}

if ($numberC == 0){
    $zeroArray[2] = $numberC;
}

if (!empty($zeroArray)) {
    echo "Чисел, равных нулю - ", (count($zeroArray)), "<br>";
}
else{
    echo "Чисел, равных нулю - 0", "<br>";
}

//посчитать сколько из чисел больше числа A
if ($numberB > $numberA){
    $aArray[0] = $numberB;
}

if ($numberC > $numberA){
    $aArray[1] = $numberC;
}

if (!empty($aArray)) {
    echo "Чисел, больше A - ", (count($aArray)), "<br>";
}
else{
    echo "Чисел, больше A -0", "<br>";
}

//посчитать сумму чисел
$numAdd = $numberA + $numberB + $numberC;

echo "Сумма всех чисел - ", $numAdd, "<br>";
//посчитать среднее арифметическое чисел
echo "Среднее арифметическое значение - ", $numAdd / 3, "<br>";

//посчитать сколько чисел кратно 2
if ($numberA % 2 == 0){
    $kr2[0] = $numberA;
}
if ($numberB % 2 == 0){
    $kr2[1] = $numberB;
}
if ($numberC % 2 == 0){
    $kr2[2] = $numberC;
}
echo "Чисел, кратных двум - ", (count($kr2)), "<br>";
//посчитать сколько чисел кратно 3
if ($numberA % 3 == 0){
    $kr3[0] = $numberA;
}
if ($numberB % 3 == 0){
    $kr3[1] = $numberB;
}
if ($numberC % 3 == 0){
    $kr3[2] = $numberC;
}
echo "Чисел, кратных трем - ", (count($kr3)), "<br>";
//посчитать сколько чисел кратно 3 и 2 одновременно
echo "Чисел, кратных и двум, и трем одновременно - ", (count($kr2)) + (count($kr3)), "<br>";