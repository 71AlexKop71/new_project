<?php

namespace classes;


class Mcontent extends Db
{
    function return_content($id)
    {
        $sql = "SELECT id, content, title, visible FROM pages WHERE id='".$id."' AND visible='1'"; // готовим запрос

        $res = $this->sql($sql); // выполняем запрос
        return $res; // возвращаем результат
    }
}