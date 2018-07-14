<!DOCTYPE html>

<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">

    <title>  Kazni </title>

    <meta name="keywords">
    <meta name="description">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="/image/logo.png">


    <script  src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>


    <script language="javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="/bootstrap/css/fa/font-awesome.css" type="text/css" media="screen" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script language="javascript" src="/js/menu.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/auth.css" rel="stylesheet">
    @yield('head_extra')
</head>
<body>



<header role="banner" class="navbar navbar-default navbar-fixed-top"  id="head" >
    <div class="container">
        <div class="navbar-header " id="font_head">

            <button data-toggle="collapse-side" id="btn_menu" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="brand">
                <a class="navbar-brand" href="/">
                    <img src="/image/logo.png">KAZNI</a>
            </div>
        </div>

        <div class=" side-collapse in">
            <nav role="navigation" class="navbar-collapse">
                <ul class="nav navbar-nav" id="menu">
                    <li class=" @yield('main_active')">
                        <a href="/#slider" class="scroll-js active">Главная</a>
                    </li >

                    <li  class=" @yield('about_active')">
                        <a href="/#about" class="scroll-js">Обо мне</a>
                    </li>

                    <li  class=" @yield('portfol_active')">
                        <a href="/#portfolio" class="scroll-js">Портфолио</a>
                    </li>

                    <li class=" @yield('blog_active')">
                        <a href="/#blog" class="scroll-js">Блог</a>
                    </li>



                    <li class=" @yield('contact_active')">
                        <a href="/#contacts" class="scroll-js">Контакты</a>
                    </li>



                    @if(Sentinel::getUser())

                        @if(Sentinel::inRole('admin') or Sentinel::inRole('moderator'))
                        <li>
                            <a href="{{ url('/adminKazni') }}">Панель</a>
                        </li>
                        @endif

                        <li>
                            <a href="{{ url('/logout') }}">


                                <i class="fa fa-share"></i> Выйти</a>
                        </li>


                        @else
                            <a href="{{ url('/login') }}" type="button" class="btn btn-logout" >Войти</a>

                        @endif


                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container side-collapse-container">

</div>




@yield('content')
@yield('main')
@yield('about')
@yield('main_type_sites')
@yield('portfolio')
@yield('socials')
@yield('blog')
@yield('contacts')

        <div id="footer">
            <div class="container">
                <div class="row">
                    <p>&copy; 2018 Kazni. Все права защищены. </p>
                    <div>
                        <a href="https://vk.com/id350570326"><i class="fa fa-vk fa-2x "></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100024055562809"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/nikolay.kazimir/"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fa fa-github fa-2x"></i></a>
                        <a href="#"><i class="fa fa-envelope fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>