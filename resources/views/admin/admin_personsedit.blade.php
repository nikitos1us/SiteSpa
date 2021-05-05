@extends("admin.admin_layout")

@section('navbar')
@endsection

@section('content')
    <form style="margin-top: 100px;" action="{{ route('adminpanel.perseditsubmit',$data->id) }}" method="post">

        @csrf

        <h1 class="uk-heading-line uk-text-center"><span>Изменение записи Персонала</span></h1>


        <div class="uk-margin" >
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="Name" value="{{ $data->Name}}" style="width: 40vw;">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: star"></span>
                <input class="uk-input" type="text" name="Prof" value="{{ $data->Prof}}" style="width: 40vw;">
            </div>
        </div>


        <div class="uk-margin">
            <div class="uk-inline">
                <input class="uk-button uk-button-secondary" type='submit' value='Сохранить' id='login'/>
            </div>
        </div>
    </form>


@endsection


