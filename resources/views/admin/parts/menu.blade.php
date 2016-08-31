<div class="col-xs-3 admin-left-sidebar">
    <div class="thumb">
        <div class="col-xs-3"><img src="/public/images/<?= Auth::user()->img?"users/".Auth::user()->img: "default/user.png"?>"></div>
        <div class="col-xs-9">
            <div class="col-xs-12 thumb-name">Pintiliy Mokanu</div>
            <div class="col-xs-12 thumb-status">admin</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="admin-menu">
        <div class="title-block-menu">Артиклес</div>
        <ul>
            <li><a href="">Список</a></li>
            <li><a href="">Додати</a></li>
            <li><a href="">Реагувати</a></li>
            <li><a href="">Видалити</a></li>
        </ul>
        <div class="title-block-menu">Статистика</div>
        <ul>
            <li><a href="">Пости</a></li>
            <li><a href="">Аккаунт</a></li>
        </ul>
        <div class="title-block-menu">Аккаунт</div>
        <ul>
            <li><a href="">Редагувати</a></li>
            <li><a href="">Вийти</a></li>
        </ul>
    </div>
</div>
