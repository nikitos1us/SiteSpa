@extends("admin.admin_layout")

@section('navbar')
@endsection

@section('content')
    <form style="margin-top: 100px;" action="{{route('adminpanel.check')}}" method="post">


        @if(Session::get('fail'))
            <div class="uk-alert-danger" uk-alert style="background-color: darkseagreen">
                <a class="uk-alert-close" uk-close></a>
                <p>
                <div class="alert alert-danger" style="font-size: 20px;font-weight: bold;">
                    {{Session::get('fail')}}
                </div>
                </p>
            </div>
        @endif

        @csrf

        <h1 class="uk-heading-line uk-text-center"><span>Вход в административную панель</span></h1>


        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="name" value="{{old('name')}}">
                <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input type="password" id="password-input" class="uk-input" type="text" name="passwd">

            </div>

        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <label style="background-color: white;padding: 5px 5px 5px 5px; color: black;"><input type="checkbox"  class="password-checkbox">
                    Показать пароль</label>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <input class="uk-button uk-button-secondary" type='submit' value='Войти' id='login'/>
            </div>
        </div>
    </form>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('body').on('click', '.password-checkbox', function () {
            if ($(this).is(':checked')) {
                $('#password-input').attr('type', 'text');
            } else {
                $('#password-input').attr('type', 'password');
            }
        });
    </script>
@endsection


