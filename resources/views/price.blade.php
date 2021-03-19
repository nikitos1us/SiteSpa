<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Спа-салон Афродита</title>
    @include('script_link')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/app.js') }}"/>
</head>

<body>

<div class="wrapper">
    <div class="content " uk-height-viewport="offset-bottom: 40px">
        <header>
            <h1 class="header-text">Spa & Beauty - salon "Afrodita"</h1>
            @include('navbar_personalized.navbar_price')
        </header>


        <main>
            <h1 class="uk-heading-line uk-text-center persons-header"><span>Прайс-лист</span></h1>
            @include('additional.price_content')
        </main>

    </div>

    @include('additional.footer')
</div>


</body>

</html>
