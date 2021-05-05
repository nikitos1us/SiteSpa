@extends("layout")

@section('navbar')

    @include('navbar_personalized.navbar_persons')

@endsection

@section('content')

    <h1 class="uk-heading-line uk-text-center persons-header"><span>Персонал</span>
    </h1>
    <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-2@l" uk-grid>

        @foreach ($persons as $v)
        <div>

                <div class="uk-card uk-card-default">
                    <div class="uk-card-body">
                        <h3 class="uk-card-title" style="color: darkcyan;">{{$v->Name}}</h3>
                    </div>
                    <div class="uk-card-media-bottom uk-transition-toggle" uk-card-media-bottom>
                        <img src="images/person.png" alt="" >
                        <div class="uk-position-center uk-panel">
                            <h1 class="uk-transition-slide-bottom-small"
                                style="color: darkmagenta;text-shadow: 1px 1px 2px black, 0 0 1em #ff00ff;">
                                {{ $v->Prof }}
                            </h1>
                        </div>
                    </div>

                </div>

        </div>
        @endforeach

    </div>


@endsection



@section('footer')
    @include('additional.footer')
@endsection
