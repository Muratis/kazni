@extends('layout')

@section('head_extra')
    <script language="javascript" src="/js/types_sites.js"></script>
    <link rel="stylesheet" href="/css/types_sites_and_prices.css">
@stop

@section('title')

@stop


@section('content')

    <div class="modal" id="more_info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                    <h1>Задача Landing Page <br><span>получить максимальное количество
                            звонков и заявок из тех кто на нее зашел</span></h1>
                    <div class="lp-pdd">
                        <h2>К примеру:</h2>

                        <div class="col-sm-6">
                            <h3>если на <span>сайт</span> <br>зайдет 1000 человек</h3>
                            <img src="/image/lp-im1.png">
                            <h3>То заявку оставит <br>примерно <span>8-10 человек</span></h3>
                        </div>

                        <div class="col-sm-6">
                            <h3>если на <span>лендинг</span> <br>зайдет 1000 человек</h3>
                            <img src="/image/lp-im2.png">
                            <h3>Заявку оставит <span>20 - 100 <br>человек</span> минимум</h3>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <h4>Такой результат достигается за счет того что:</h4>
                            <h5>Лендинг состоит из 1-й страницы на которой нет уводящих ссылок</h5>
                            <h5>На лендинге есть конкретное предложение по конкретному продукту</h5>
                            <h5>Нет никакой лишней информации и большого количества текстов</h5>
                            <h5>Он создается по определенной структуре которая удерживает посетителей на сайте и подводит пользователя к тому чтобы оставить заявку или позвонить</h5>
                        </div>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section id="lp-site">
        <div id="what_is">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>ЧТО ТАКОЕ LANDING PAGE</h1>
                        <h2>Лендинг - это специальная интернет страница - ее задача получить
                            максимальное количество звонков и заявок из тех, кто на нее зашел</h2>
                        <button type="button" class="btn btn-success wrapper hidden-sm hidden-xs" data-toggle="modal" data-target="#more_info">Узнать больше </button>
                        <button type="button" class="btn btn-success wrapper hidden-md hidden-lg" id="show_moreInfo">Узнать больше </button>

                        <div class="lp-content col-xs-12 hid_lp hidden-lg hidden-md">
                            <div class="row">
                                <div class="lp-pdd">
                                    <div class="bg col-xs-12">
                                        <h3>Если на <span>сайт</span><br> зайдет 1000 человек</h3>
                                        <img src="/image/lp-im1.png">
                                        <h3>То заявку оставит <br>примерно <span>8-10 человек</span></h3>
                                    </div>
                                    <div class=" col-xs-12">
                                        <h3>Если на <span>лендинг</span><br> зайдет 1000 человек</h3>
                                        <img src="/image/lp-im2.png">
                                        <h3>Заявку оставит <span>20 - 100 <br>человек</span> минимум</h3>
                                    </div>
                                </div>
                                <div class="bg col-xs-12">
                                    <div class="row">
                                        <h4>Такой результат достигается за счет того что:</h4>
                                        <h5>Лендинг состоит из 1-й страницы, на которой нет уводящих ссылок</h5>
                                        <h5>На лендинге есть конкретное предложение по конкретному продукту</h5>
                                        <h5>Нет никакой лишней информации и большого количества текстов</h5>
                                        <h5>Он создается по определенной структуре, которая удерживает посетителей на сайте и подводит пользователя к тому, чтобы оставить заявку или позвонить</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div id="ForWhat">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Разработка лендинга идеально подходит для:</h1>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-1.png">
                        <p>Розничной<br>торговли</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-2.png">
                        <p>Оптовых<br>продаж</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-3.png">
                        <p>Сферы услуг</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-4.png">
                        <p>Производителей</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-5.png">
                        <p>Уникального<br>или дорогого <br>товара</p>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <img src="/image/lp-6.png">
                        <p>Обучающих<br>программ</p>
                    </div>

                    <div class="col-sm-12 col-xs-12 cont_lp">
                        <h2>Лендинг подходит для продажи одной категории товара или услуги</h2>
                        <h2><span>К примеру</span> если вы продаете шкафы купе и кухни - то вам нужно два отдельных <br>лендинга, один с предложениям по кухням, другой по шкафам купе</h2>
                    </div>

                </div>
            </div>
        </div>

        <div id="pricesForlp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>3 основных вида Landing page</h1>
                    </div>

                    <div class="typeslp">
                        <div class="col-sm-4">
                            <div class="card">
                                <h2>Короткий<br>Landing Page<br><span>(1-2 экрана)</span></h2>
                                <img src="/image/lp3-1.png">
                                <div class="bg">
                                    <h3>Средняя стоимость:</h3>
                                    <h4>150$</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <h2>Классический <br>Landing Page <br><span>(3-8 экранов)</span></h2>
                                <img src="/image/lp3-2.png">
                                <div class="bg">
                                    <h3>Средняя стоимость:</h3>
                                    <h4>150$ - 400$</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <h2>Длинный <br>Landing Page <br><span>(8-15 экранов)</span></h2>
                                <img src="/image/lp3-3.png">
                                <div class="bg">
                                    <h3>Средняя стоимость:</h3>
                                    <h4>400$ - 600$</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



@stop