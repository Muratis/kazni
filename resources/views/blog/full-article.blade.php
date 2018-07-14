@extends('layout')

@section('head_extra')

    <link rel="stylesheet" href="/css/blog.css">
    <script language="javascript" src="/bootstrap/js/masonry.pkgd.min.js"></script>

@stop

@section('title')

@stop

@section('blog_active')
    active
    mf
@stop

@section('content')

    <div class="container bord_news">
        <div class="row">
             <div class="full_article">

                 <div class="name_news">
                     <hr>
                     <h1>{{$news->title}}</h1>
                 </div>
                 <hr>
                 <div class="text_news">
                     {!! $news->text !!}
                 </div>

                 <h2 id="comments">Комментарии</h2>

                 <div>


                     @foreach($comments as $comment )
                         @include('/blog/comment', array('comment' => $comment))
                     @endforeach




                 </div>

                 <div class="addComment">
                     <form role="form" action="{{ route('add_comn') }}" method="post">

                         <input type="hidden" value="{{$news->post_id}}" name="post_id">
                         @include('blog/forms/comment_form')
                         {{csrf_field()}}

                         <div class="form-group comn_btn">
                             <button type="submit" class="btn btn-primary comment_btn">Добавить</button>
                         </div>

                     </form>
                 </div>

             </div>

        </div>

    </div>


@stop