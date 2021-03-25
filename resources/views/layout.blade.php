<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Спа-салон Афродита</title>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @include('script_link')
</head>

<body>


<div class="wrapper">
    <div class="content" uk-height-viewport="offset-bottom: 40px">
        <header>
            <h1 class="header-text">Spa & Beauty - salon "Afrodita"</h1>
            @yield("navbar")
        </header>

        <main>
            @yield("content")
        </main>
    </div>

    @include('additional.footer')

</div>
</body>

</html>
