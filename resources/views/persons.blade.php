<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Спа-салон Афродита</title>
    @include('script_link')
</head>

<body>

<div class="wrapper">
    <div class="content " uk-height-viewport="offset-bottom: 40px">
        <header>
            <h1 class="header-text">Spa & Beauty - salon "Afrodita"</h1>
            @include('navbar_personalized.navbar_persons')
        </header>

        <section class="uk-section">
            <main>
                <h1 class="uk-heading-line uk-text-center persons-header" style="margin-top: -50px;"><span>Персонал</span></h1>
                @include('additional.persons_content')
            </main>
        </section>
    </div>

    @include('additional.footer')
</div>


</body>

</html>

