<?php
namespace classes;

class CcreateEdit extends McreateEdit
{
    // создаем новую страницу
    public function saveToDB($page)
    {

        $sql = "INSERT INTO pages (";
        foreach ($page as $k => $v) {
            $sql .= $k . ",";
        }

        $sql = substr($sql, 0, -1);

        $sql .= ") VALUES(";

        foreach ($page as $v) {
            $sql .= "\"" . $v . "\",";
        }

        $sql = substr($sql, 0, -1);

        $sql .= ")";

        $this->putToDB($sql);
    }

}
