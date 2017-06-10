<a href = "index.php?page=add">Добавить страницу</a>


<?php
$content = new classes\CcreateEdit();

if ($_GET["page"]=="add")
{
   require_once "views/vcreate.php";
}




