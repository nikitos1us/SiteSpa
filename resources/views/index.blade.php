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

            <div class="uk-section uk-section-muted" uk-section-intro>
                <div class="uk-container">
                    <h3>Добро пожаловать на сайт Спа-салона Афродита!</h3>
                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <p>Мы предоставляем различные услуги</p>
                        </div>
                        <div>
                            <p>Например, массаж спины, массаж лица</p>
                        </div>
                        <div>
                            <p>А также у нас есть хамам!</p>
                        </div>
                    </div>
                </div>
            </div>


            @include('additional.index_slideshow')

        </main>

    </div>

    @include('additional.footer')
</div>

</body>


</html>

