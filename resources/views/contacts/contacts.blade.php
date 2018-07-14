

<section id="contacts" >

    <div class="brd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="brd-h3">КОНТАКТЫ</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <span class="bd"></span>
            </div>
        </div>
    </div>


    <div class="container">
        <div >
        <form action="/contacts/send" method="post" class="formForMessage form-control">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control inputForMessage"  name="nameUser" placeholder="Имя(Обязательно)">
            </div>
            <span class="help-block">{!! $errors->first('nameUser') !!}</span>

            <div class="form-group">
                <input type="email"  class="form-control inputForMessage" name="emailUser" placeholder="Ваш email(Обязательно)">
            </div>
            <span class="help-block">{!! $errors->first('emailUser') !!}</span>

            <div class="form-group">
                <input type="text"  class="form-control inputForMessage" name="subjectUser" placeholder="Тема">
            </div>
            <span class="help-block">{!! $errors->first('subjectUser') !!}</span>

            <div class="form-group">
                <textarea class="form-control" name="text"></textarea>
            </div>
            <span class="help-block">{!! $errors->first('text') !!}</span>

            <div class="form-group">
                <input type="submit" class="form-control submMessage btn btn-primary" name="submMessage" value="Отправить">
            </div>
        </form>
        <aside class="left_details">
            <div>
                <div>
                    <h4>Контакты</h4>
                    <p>
                        Есть предложение работы или сотрудничества?
                        Заметили ошибку/баг на одном из моих проектов?
                        Сообщите мне:
                    </p>
                    <ul>
                        <li><i class="fa fa-phone"></i>+380506136673</li>
                        <li><i class="fa fa-envelope"></i>kaznikolas12@gmail.com</li>
                        <li><i class="fa fa-edit"></i>Написать тут сообщение.</li>
                    </ul>
                </div>
                <div>
                    <h4>Ссылки для связи</h4>

                    <ul>
                        <li><i class="fa fa-vk"></i><a href="https://vk.com/nikolay.kazimir">ВКонтакте</a></li>
                        <li><i class="fa fa-facebook"></i><a href="#">Facebook</a></li>
                        <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/nikolay.kazimir/">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>
</section>

