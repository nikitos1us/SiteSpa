@extends("admin.admin_layout")

@section('navbar')
    @include("admin.adm_navbar")
@endsection

@section('content')

    <div class="uk-margin uk-align-center" style="width: 40vw; margin-top: 10px;">
        <form class="uk-grid-small" uk-grid>
            <div class="uk-width-1-3@s">
                <input class="uk-input" id="form-horizontal-text" type="text" name="title"  placeholder="Title">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input" id="form-horizontal-text" type="text" name="price" placeholder="Price">
            </div>
            <div class="uk-width-1-3@s">
                <input class="uk-input" id="form-horizontal-text" type="text" name="length" placeholder="Length in minutes">
            </div>
            <div class="uk-width-1-1@s">
                <input class="uk-button uk-button-secondary" type='submit'
                       formaction="{{route('adminpanel.servcheck')}}" value='Добавить'/>
            </div>

        </form>

    </div>



    <div class="uk-margin uk-inline">
        <p style="color: darkmagenta; font-weight: bold; font-size: 40px; ">Все услуги</p>
        <table class="uk-table uk-table-hover uk-table-divider" style="background-color: #ffe9aa;">
            <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Length</th>
                <th></th><th></th>

            </tr>
            </thead>
            <tbody>
            @foreach ($service as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->price }}</td>
                    <td>{{ $v->length }}</td>
                    <td><a href="{{ route('adminpanel.servedit',$v->id) }}"><button class="uk-button-primary">Change</button></a></td>
                    <td><a href="{{ route('adminpanel.servdelete',$v->id) }}"><button class="uk-button-danger">Delete</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
