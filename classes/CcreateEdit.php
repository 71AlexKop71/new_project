<?php
class CcreateEdit
{
    private $n="Ошибки нет";

    public function proverka($p){

        if($p){
            $this->n=$p;
        }

        echo $this->n;
    }
}
