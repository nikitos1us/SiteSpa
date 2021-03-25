@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_index')

@endsection

@section('content')

    <h1 class="uk-heading-line uk-text-center persons-header">
        <span>Добро пожаловать на сайт Спа-салона Афродита!</span>
    </h1>
    @include('additional.index_content')
    @include('additional.index_slideshow')

@endsection


