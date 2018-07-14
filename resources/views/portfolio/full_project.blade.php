@extends('layout')

@section('head_extra')
    <link rel="stylesheet" href="/css/portfolio.css">
    <script language="javascript" src="/js/portfolio.js"></script>
@stop

@section('portfol_active')
    active
@stop

@section('content')
    <div class="container full_project">
        <div class="row">
            <div>
                <h3 class="wrapper">
                  Проект "{{$portfolio->title}}"
                </h3>
                <p>
                    <strong>Ссылка на роботу:</strong>
                    <a href="{{$portfolio->link_to_project}}">
                        {{$portfolio->link_to_project}}
                    </a>
                </p>
            </div>

            <?php
            $images = explode(',', $portfolio->slide_images_project)
            ?>
            <div id="carousel_portfolio" class="carousel slide" data-interval="6000">

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/{{$portfolio->meta_project_image}}" alt="" class="wrapper">

                    </div>
                    @foreach($images as $image)
                        <div class="item">
                            <img src="/{{$image}}" alt="" class="wrapper">
                        </div>
                    @endforeach

                </div>

                <!--Стрелки переключения слайда-->
                <a href="#carousel_portfolio" class="left carousel-control" data-slide="prev">
                    <span><i class="fa fa-arrow-left fa-2x"></i></span>
                </a>
                <a href="#carousel_portfolio" class="right carousel-control" data-slide="next">
                    <span><i class="fa fa-arrow-right fa-2x"></i></span>
                </a>
            </div>

            <div class="desc">
                <h3 class="wrapper">Описание</h3>
                <p>
                    {{$portfolio->desc_project}}
                </p>
            </div>
        </div>
    </div>



@stop