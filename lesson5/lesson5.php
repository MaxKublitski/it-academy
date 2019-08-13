<?php

//Создать 10 классов.
//У каждого класса должно быть 3 характерных ему свойства
//У каждого класса должны быть описаны типы свойств в аннотациях.
//У каждого класса должно быть сеттеры и геттеры для всех свойст
//У каждого класса должны быть 2 публичных метода характерных этому
//      классу и один приватный
//5 классов должны содержать в себе в свойстве другой класс
//      (например класс клавиатура содержит свойство - массив классов кнопок,
//      или класс машина содержит в себе свойство двигатель(другой класс)

class Ball
{
    /**
     * @var
     *
     */
    public $round;
    /**
     * @var
     *
     */
    public $bouncy;
    /**
     * @var
     *
     */
    public $color;

    /**
     * @param mixed $bouncy
     */
    public function setBouncy($bouncy)
    {
        $this->bouncy = $bouncy;
    }

    /**
     * @return mixed
     */
    public function getBouncy()
    {
        return $this->bouncy;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $round
     */
    public function setRound($round)
    {
        $this->round = $round;
    }

    /**
     * @return mixed
     */
    public function getRound()
    {
        return $this->round;
    }


    public function rolling()
    {

    }

    public function bouncyHigh()
    {

    }

    private function displayColor()
    {
        echo $this->color;
    }

    public function trueDisplayColor()
    {
        echo $this->displayColor();
    }
}

$myBall = new Ball;

$myBall->round = '360';
$myBall->bouncy = 10;
$myBall->color = 'red';

var_dump($myBall);
echo $myBall->trueDisplayColor();


class Car
{
    /**
     * @var
     *
     */
    public $doors;
    /**
     * @var
     *
     */
    public $engine;
    /**
     * @var
     *
     */
    public $color;
    /**
     * @var
     *
     */
    private $manufacturer;

    /**
     * @param mixed $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function startEngine()
    {
        $this->engine->start();
    }

    public function stopEngine()
    {
        $this->engine->stop();
    }

    public function __construct($color, Engine $newEngine, $manufacturer)
    {
        $this -> color = $color;
        $this -> engine = $newEngine;
        $this -> manufacturer = $manufacturer;
    }

}

class Engine
{
    public function start()
    {

    }

    public function stop()
    {

    }
}

$engine = new Engine;
$myCar = new Car('red', $engine, 'WAZ');

var_dump($myCar);


//Создать сруктуру для Кладовщика
//Журнал с списком дат загрузки и приемки товара. Выделить !
//отдельно храним приемку и отгрузку товара
//храним время в которое произошла приемка или отгрузка, дату и грузовик
//можем получить список всех отгрузок/приемок за введенный день
//можем получить список всех отгрузок/приемок за введенный день  и с определенным весом
//Создать класс Грузовик - марка, грузоподъемность, фио водителя.

class Journal
{
    public $date;
    public $time;
    public $acceptance;
    public $shipment;

}


class Truck
{
    public $manufackturer;
    public $capacity;
    public $driversFIO;
}