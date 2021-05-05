@extends("admin.admin_layout")

@section('navbar')
    @include("admin.adm_navbar")
@endsection

@section('content')

    <div class="uk-margin uk-align-center" style="width: 40vw; margin-top: 10px;">
        <form class="uk-grid-small" uk-grid>
            <div class="uk-width-1-2@s">
                <input class="uk-input" id="form-horizontal-text" type="text" name="Name"  placeholder="Name">
            </div>
            <div class="uk-width-1-2@s">
                <input class="uk-input" id="form-horizontal-text" type="text" name="Prof" placeholder="Prof">
            </div>
            <div class="uk-width-1-1@s">
                <input class="uk-button uk-button-secondary" type='submit'
                       formaction="{{route('adminpanel.perscheck')}}" value='Добавить'/>
            </div>

        </form>

    </div>



    <div class="uk-margin uk-inline">
        <p style="color: darkmagenta; font-weight: bold; font-size: 40px; ">Весь персонал</p>
        <table class="uk-table uk-table-hover uk-table-divider" style="background-color: #ffe9aa;">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Prof</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($persons as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->Name }}</td>
                    <td>{{ $v->Prof }}</td>
                    <td><a href="{{ route('adminpanel.persedit',$v->id) }}"><button class="uk-button-primary">Change</button></a></td>
                    <td><a href="{{ route('adminpanel.persdel',$v->id) }}"><button class="uk-button-danger">Delete</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
