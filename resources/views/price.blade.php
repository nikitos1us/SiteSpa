@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_price')

@endsection

@section('content')

    <h1 class="uk-heading-line uk-text-center persons-header"><span>Прайс-лист</span></h1>


    <div class="uk-section uk-section-default">


        <div class="uk-grid uk-grid-match uk-child-width-1-1@l  uk-child-width-1-1@m  uk-child-width-1-1@s ">
            <div>

                <div class="uk-cover-container">
                    <h2 class="uk-h2" style="font-size: 2vw"> Зональный массаж </h2>
                    <table class="uk-table uk-align-center uk-table-hover uk-table-divider">

                        <thead>
                        <tr style="align-self: center">
                            <th>Услуга</th>
                            <th>Стоимость</th>
                            <th>Продолжительность</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($service as $v)
                            <tr>
                                <td>{{$v->title}}</td>
                                <td>{{$v->price}}</td>
                                <td>{{$v->length}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

            </div>


        </div>


    </div>

@endsection

@section('footer')
    @include('additional.footer')
@endsection
