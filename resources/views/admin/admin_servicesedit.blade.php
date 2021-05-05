@extends("admin.admin_layout")

@section('navbar')
@endsection

@section('content')
    <form style="margin-top: 100px;" action="{{ route('adminpanel.serveditsubmit',$data->id) }}" method="post">

        @csrf

        <h1 class="uk-heading-line uk-text-center"><span>Изменение записи Персонала</span></h1>


        <div class="uk-margin" >
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="title" value="{{ $data->title}}" style="width: 40vw;">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: star"></span>
                <input class="uk-input" type="text" name="price" value="{{ $data->price}}" style="width: 40vw;">
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: star"></span>
                <input class="uk-input" type="text" name="length" value="{{ $data->length}}" style="width: 40vw;">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <input class="uk-button uk-button-secondary" type='submit' value='Сохранить' />
            </div>
        </div>
    </form>


@endsection


