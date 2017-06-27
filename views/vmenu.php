<?php
$result = $menu->get_menu_from_DB();
?>

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
                <?php
                    foreach ($result as $value){
                        echo "<li><a href = \"?id=".$value["id"]."\">".$value["menu_name"]."</a></li>";
                    }
                ?>
            </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</div>
