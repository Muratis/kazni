
@extends('layout')

@section('head_extra')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/types_sites_and_prices.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/portfolio.css">
    <link rel="stylesheet" href="/css/socials.css">
    <script language="javascript" src="/js/index.js"></script>
    <script language="javascript" src="/bootstrap/js/masonry.pkgd.min.js"></script>

@stop


@section('title')

@stop

{{--@section('main_active')--}}
{{--active--}}

{{--@stop--}}

@section('main')
    @include('main')
@stop

@section('about')
    @include('about')
@stop

@section('main_type_sites')
    @include('main_type_sites')
@stop

@section('portfolio')
    @include('portfolio.portfolio')
@stop

@section('socials')
    @include('socials_me')
@stop

@section('blog')
    @include('blog.blog', array('news' => $news))
@stop

@section('contacts')
    @include('contacts.contacts')
@stop