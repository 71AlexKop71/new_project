<div id="addpageform">
    <form method="post" role="form">
        <div class="form-group">
            <label for="pageMenuName">Название страницы в меню</label>
            <input type="text" class="form-control" id="pageMenuName" placeholder="Введите название страницы" name="menu_name">
        </div>

        <div class="form-group">
            <label for="title">Тайтл</label>
            <input type="text" class="form-control" id="title" placeholder="Введите тайтл" name="title">
        </div>

        <div class="form-group">
            <label for="content">Контент</label>
            <textarea rows="10" class="form-control" id="content" cols="45" placeholder="Введите текст для этой страницы" name="content"></textarea>
        </div>

        <div class="form-group">
            <label>Видимость</label><br>
            <select name = "visible">
                <option value = "0">скрыть</option>
                <option value = "1">отображать</option>
            </select>
        </div>

        <div class="form-group">
            <label>Видимость в гланом меню</label>
            <select name = "visible_in_main_menu">
                <option value = "0">скрыть</option>
                <option value = "1">отображать</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Добавить страницу</button>
    </form>
</div>