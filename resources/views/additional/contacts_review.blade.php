<div class="uk-grid-large uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l" uk-grid>
    <div>
        <br><br>
        <div class="uk-card uk-card-primary ">
            <div class="uk-card-body">

                <form method="POST" action="{{route('review.check')}}">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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
                    <div class="uk-fieldset">
                        <legend class="uk-legend">Форма обратной связи</legend>

                        <label>Введите ваше имя: <input class="uk-input @error('title') is-invalid @enderror"
                                                        type="text" placeholder="Имя"
                                                        name="name" value="{{old('name')}}"></label>
                        <br><br>

                        <label>Введите ваш E-mail:<input class="uk-input @error('title') is-invalid @enderror"
                                                         type="text" placeholder="E-mail" name="email"
                                                         value="{{old('email')}}"></label>
                        <br><br>

                        <label>Пол:
                            <div class="uk-margin uk-align-center uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-radio" type="radio" name="gender" value="Мужской">
                                    Мужской</label>
                                <label><input class="uk-radio" type="radio" name="gender" value="Женский">
                                    Женский</label>
                            </div>
                        </label>
                        <br>

                        <div class="uk-margin">
                            <textarea class="uk-textarea @error('title') is-invalid @enderror" rows="5"
                                      placeholder="Textarea" name="comment"></textarea>
                        </div>
                        <br>

                        <button class="uk-button uk-button-danger" type="submit" name="submit">Отправить</button>


                    </div>


                </form>
            </div>
        </div>
        <br><br>


    </div>

</div>
