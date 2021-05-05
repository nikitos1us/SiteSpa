<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li><a href="./addpersons">Изменение Сотрудников</a></li>
            <li><a href="#">Изменение Услуг</a></li>
            <li><a href="#">Контроль Отзывов</a></li>
            <li><a href="./addvis">Добавить посетителя</a></li>

        </ul>

    </div>
    <div class="uk-navbar-right" style="margin-right: 10px;">

        <ul class="uk-navbar-nav">
            <li><a href="./settings">Настройки профиля</a></li>
        </ul>
        <ul class="uk-navbar-nav">
            <a href="{{ route('adminpanel.logout') }}">Logout</a>
        </ul>

    </div>
</nav>
