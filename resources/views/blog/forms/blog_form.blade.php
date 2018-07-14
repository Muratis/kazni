<div class="form-group">
    <label for="text" class="sr-only">Название новости</label>
    <input type="text" name="title"  class="form-control txt_name"
           placeholder="Введите название"
           value="{{ old('title') }}">
    @if ($errors->first('title'))

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="bd"></span>
                </div>
            </div>
        </div>
        <div class="alert alert-danger error">
            <ul>
                <li>{{ $errors->first('title') }}</li>
            </ul>
        </div>

    @endif
</div>


<div class="form-group">
    <h4>Введите текст предварительного просмотра</h4>
    <textarea class="form-control " id="test2" name="preview" >

        {{ old('preview') }}
    </textarea>
    @if ($errors->first('preview'))
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="bd"></span>
                </div>
            </div>
        </div>
        <div class="alert alert-danger error">
            <ul>
                <li>{{ $errors->first('preview') }}</li>
            </ul>
        </div>
    @endif
    {{--<input type="text" name="preview"  class="form-control" placeholder="Введите текст предварительного просмотра">--}}
</div>

<div class="form-group">
    <h4>Введите полный текст</h4>
    <textarea class="form-control " id="test" name="text">
        {{ old('text') }}
        {{--{{ $d->content->text ?  $d->content->text : ""  }}--}}

    </textarea>

    @if ($errors->first('text') )
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="bd"></span>
                </div>
            </div>
        </div>
        <div class="alert alert-danger error">
            <ul>
                <li>{{ $errors->first('text') }}</li>
            </ul>
        </div>

    @endif
    {{--<input type="text" name="text_news"  class="form-control" placeholder="Введите текст новости">--}}

</div>





