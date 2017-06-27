<?php
namespace classes;

class McreateEdit extends Db
{
    public function putToDB($sql)
    {
        $this->sql($sql);
    }
}