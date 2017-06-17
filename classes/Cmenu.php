<?php

namespace classes;


class Cmenu extends Mmenu
{
    // возвращаем меню с БД
    public function get_menu_from_DB(){

        $res = $this->return_menu(); // запрос к БД
        while ($row = mysqli_fetch_assoc($res))
        {
            $mname[$row['id']] = $row;
        }
        return $mname;
    }
}