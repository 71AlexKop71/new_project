<?php
// автозагрузка классов
function __autoload($name)
{
    require_once($name . '.php');
}
$today = new classes\GetDate();
$content = new classes\CcreateEdit();

