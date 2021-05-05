<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li><a href="./addpersons">Сотрудники</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="./addvis">Посетителя</a></li>

        </ul>

    </div>
    <div class="uk-navbar-right" style="margin-right: 10px;">

        <ul class="uk-navbar-nav">
            <li><a href="./settings">Кабинет администратора</a></li>
        </ul>
        <ul class="uk-navbar-nav">
            <a href="{{ route('adminpanel.logout') }}">Выйти</a>
        </ul>

    </div>
</nav>
