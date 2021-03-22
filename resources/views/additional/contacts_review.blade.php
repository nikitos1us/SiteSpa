<div class="uk-grid-large uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l" uk-grid>
    <div>
        <br><br>
        <div class="uk-card uk-card-primary ">
            <div class="uk-card-body">

                <form method="POST" action="/contacts" >
                    {{ csrf_field() }}
                    <div class="uk-fieldset">
                        <legend class="uk-legend">Форма обратной связи</legend>

                        <label>Введите ваше имя: <input class="uk-input @error('title') is-invalid @enderror" type="text" placeholder="Имя"
                                                        name="name"></label>
                        <br><br>

                        <label>Введите ваш E-mail:<input class="uk-input @error('title') is-invalid @enderror" type="text" placeholder="E-mail" name="email"></label>
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
                            <textarea class="uk-textarea @error('title') is-invalid @enderror" rows="5" placeholder="Textarea" name="comment"></textarea>
                        </div>
                        <br>

                        <button class="uk-button uk-button-danger" type="submit" name="submit">Отправить</button>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    </div>


                </form>
            </div>
        </div>
        <br><br>


    </div>

</div>
