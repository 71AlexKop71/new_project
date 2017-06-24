<?php

namespace classes;


class Ccontent extends Mcontent
{
    public function __construct($id)
    {
        $result = $this->get_content_from_DB($id);
        return $result;
    }


    // возвращаем меню с БД
    public function get_content_from_DB($id){

        $res = $this->return_content($id); // запрос к БД
        while ($row = mysqli_fetch_assoc($res))
        {
            $mcontent[$row['id']] = $row;
        }
        return $mcontent;
    }
}