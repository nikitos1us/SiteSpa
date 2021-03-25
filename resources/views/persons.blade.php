@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_persons')

@endsection

@section('content')

    <h1 class="uk-heading-line uk-text-center persons-header" ><span>Персонал</span>
    </h1>
    @include('additional.persons_content')

@endsection



