<?php

//мой интерфейс (список функция который я хочу видить) в управление, сигналов и дворников
interface IStandart_move_car{
    public function up();
    public function down();
    public function left();
    public function right();
    public function dvornik_in();
    public function dvornik_of();
}

// абстрактный клс для управления реализующий интерфейс
abstract class Standart_move_car  implements IStandart_move_car {
    
    public function up(){
        $move = "Вреред <br/>";
        $signal = "Выключен <br/>";
        echo $move + $signal;
    }
    public function down(){
        $move = "Назад <br/>";
        $signal = "Выключен <br/>";
        echo $move + $signal;
    }
    public function left(){
        $move = "Влево <br/>";
        $signal = "Включен левый поворотник <br/>";
        echo $move + $signal;
    }
    public function right(){
        $move = "Вправо<br/> ";
        $signal = "Включен правый поворотник <br/>";
        echo $move + $signal;
    }
    public function dvornik_in(){
        $dvornik = "Дворник включен<br/> ";
        echo $dvornik;
    }
    public function dvornik_of(){
        $dvornik = "Дворник выключен<br/> ";
        echo $dvornik;
    }
    
}

// тип машины (легвой, строительный, военный) со своей способностью. Наследник "стандартного управления"
abstract class TypeCar extends Standart_move_car
{
    public function easi_car(){
        $superMove = "Виндизеливский разворот на 180 <br/>";
        echo $superMove;

    }
    public function bild_car(){
        $superMove = "Поднять кран, без аварий<br/> ";
        echo $superMove;
    }
    public function armmia_car(){
        $superMove = "Выстрел из пушки<br/> ";
        echo $superMove;
    }
}

//класс выбора цвета, который наследует предыдущие классы родители

class Сolor_selection extends TypeCar 
{
    public function red(){
        $color = "красный<br/>";
        echo $color;
    }
    
    public function gray(){
        $color = "серый<br/>";
        echo $color;
    }
}




$obj = new Сolor_selection();
echo $obj->up();
echo $obj->dvornik_in();
echo $obj->easi_car();
echo $obj->gray();