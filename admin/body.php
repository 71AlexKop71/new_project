<!-- Static navbar -->
<div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Наш проэкт</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href = "index.php?page=add">Добавить страницу</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</div>





<?php
// создаем обьекты
$content = new classes\CcreateEdit();

if ($_GET["page"]=="add")
{
   require_once "views/vcreate.php";
}

if($_POST){
    if ($_GET["page"]=="add")
    {
        $content->saveToDB($_POST);
    }
}





