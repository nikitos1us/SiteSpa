@extends("admin.admin_layout")

@section('navbar')
    @include("admin.adm_navbar")
@endsection

@section('content')

    <form style="margin-top: 100px;" action="{{route('adminpanel.lkedit',session()->get('LoggedAdminID'))}}" method="post">


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

        <h1 class="uk-heading-line uk-text-center uk-text-uppercase uk-background-muted"><span>Личный кабинет</span></h1>


        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="name" value="{{ session()->get('LoggedAdmin')}}" readonly>
                <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: unlock"></span>
                <input type="password" id="passwd1" class="uk-input" type="text" name="passwd1" placeholder="Previous password">
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input type="password" id="passwd2" class="uk-input" type="text" name="passwd2" placeholder="New password">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <input class="uk-button uk-button-secondary" type='submit' value='Сохранить' id='save'/>
            </div>
        </div>
    </form>


@endsection
