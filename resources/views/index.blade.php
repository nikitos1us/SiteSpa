@section('content')
{{
    $test
}}
@endsection

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
</head>
<body>
<div class="content">
    <h1 class="header-text">Спа-салон Афродита</h1>

    <header>
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/persons">Персонал</a></li>
            <li><a href="/price">Прайс-лист</a></li>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </header>

    <main>
        <a>trululu</a>
        <div>@yield('content')</div>

    </main>



</div>
</body>
<footer class="main-footer"> Fuck</footer>
</html>

