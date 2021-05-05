@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_contacts')

@endsection

@section('content')
    <h1 class="uk-heading-line uk-text-center persons-header">
        <span>Контактная информация</span>
    </h1>

    @include('additional.contacts_content')
    @include('additional.contacts_review')

@endsection

@section('footer')
@endsection



