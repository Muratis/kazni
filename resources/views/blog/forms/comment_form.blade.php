{{--<input type="hidden" value="{{$news->post_id}}" name="post_id">--}}
<div class="form-group">
    <label for="text" >Введите ваше имя</label>
    <input type="text" name="nameUser" class="form-control" placeholder="Введите ваше имя" value="{{old('nameUser')}}" >

    @if ($errors->first('nameUser'))

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="bd"></span>
                </div>
            </div>
        </div>
        <div class="alert alert-danger error">
            <ul>
                <li>{{ $errors->first('nameUser') }}</li>
            </ul>
        </div>

    @endif

</div>
<div class="form-group">
    <label for="text" >Оставьте коментаррий</label>
    <textarea class="form-control" name="commentTxt">
        {{old('commentTxt')}}
    </textarea>

    @if ($errors->first('commentTxt'))
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="bd"></span>
                </div>
            </div>
        </div>
        <div class="alert alert-danger error">
            <ul>
                <li>{{ $errors->first('commentTxt') }}</li>
            </ul>
        </div>
    @endif

</div>