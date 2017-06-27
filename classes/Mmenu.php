<?php

namespace classes;


class Mmenu extends Db
{
    function return_menu()
    {
        $sql = "SELECT id, menu_name FROM pages WHERE visible_in_main_menu ='1' ORDER BY id"; // готовим запрос

        $res = $this->sql($sql); // выполняем запрос
        return $res; // возвращаем результат
    }
}