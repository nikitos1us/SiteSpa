@extends("admin.admin_layout")

@section('navbar')
@endsection

@section('content')
    <form style="margin-top: 100px;" action="{{route('adminpanel.check')}}" method="post">
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>

        @endif


        @csrf
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
                <input class="uk-input" type="text" name="passwd">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <input class="uk-button uk-button-secondary" type='submit' value='Войти' id='login'/>
            </div>
        </div>
    </form>
@endsection


