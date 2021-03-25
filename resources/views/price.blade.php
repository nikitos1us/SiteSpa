@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_price')

@endsection

@section('content')

    <h1 class="uk-heading-line uk-text-center persons-header"><span>Прайс-лист</span></h1>
    @include('additional.price_content')

@endsection

