@section('content')
    {{ $content_type }}
@endsection



<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Спа-салон Афродита</title>
    @include('script_link')

</head>


<body>

<div class="wrapper">

    <div class="content" uk-height-viewport="offset-bottom: 40px">
        <header>
            <h1 class="header-text" header-text>Spa & Beauty - salon "Afrodita"</h1>
            @include('navbar_personalized.navbar_index')
        </header>

        <main>
            <h1 class="uk-heading-line uk-text-center persons-header"><span>Добро пожаловать на сайт Спа-салона Афродита!</span>
            </h1>
            @include('additional.index_content')
            @include('additional.index_slideshow')
        </main>

    </div>

    @include('additional.footer')

</div>
</body>

</html>

