<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$description}}">
    @section('individual_scripts_and_styles')@show
    <link rel="stylesheet" href="@section('css_link')@show">
    <script src="@section('scripts_link')@show"></script>


    <title>@section('title')Технобаттлы :: @show</title>

</head>
<body>
    <div class="structure">
        <header>
            <div class="nav_menu">

                <div class="container">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('storage/images/logo2.png') }}" alt="Лаборатория иновационного творчества">
                        </a>
                    </div>
                    <span class="menu_trigger"><i class="fas fa-bars"></i></span>
                    <div class="items_menu">
                        <ul class="im_ul">

                            <li>
                                <a href="{{ route('news') }}">Новости</a>
                            </li>


                            <li>
                                <a href="{{ route('gallery') }}">Галерея </a>
                            </li>


                            <li>
                                <a href="{{ route('review') }}">Отзывы</a>
                            </li>


                            <li >
                                <a  href="{{ route('techbattles') }}">Технобаттлы 2020</a><span class="menu_trigger2"><i class="fas fa-bars"></i></span>
                                <ul class="dropdown">
                                    <a href="{{ route('techbattles') }}#aboutus"><li><i class="fas fa-project-diagram"></i>&nbsp;&nbsp;О проекте</li></a>
                                    <a href="{{ route('techbattles') }}#ourp"><li><i class="far fa-handshake"></i>&nbsp;&nbsp;Наши партнёры</li></a>
{{--                                    <li><i class="far fa-question-circle"></i>&nbsp;&nbsp;Задать вопрос</li>--}}
                                    <a href="{{ route('techbattles') }}#methrec"><li><i class="fas fa-book"></i>&nbsp;&nbsp;Методические рекомендации</li></a>
                                </ul>
                            </li>




                                <li><a href="{{route('about')}}">О нас</a></li>



                            <span class="search">
                                <i class="fas fa-search"></i>
                            </span>
                            <form class="form_search" action="{{route('search')}}" method="get">
                                <input placeholder="Введите поисковый запрос..." type="text" name="s" class="search_input @error('s') is_invalid @enderror" required>
                                <button class="search_button"><i class="fas fa-arrow-right"></i></button>
                            </form>

                        </ul>
                    </div>

                </div>

            </div>
        </header>
        <div class="main">

            @yield('content')

        </div>

        <footer>
            <div class="container">
                <div class="fa-copyright">Copyright © 2021 Science and Technology | Powered by Science and Technology</div>
                <div class="social_service">
                    {{-- <i class="fab fa-facebook-square"></i>--}}
                    {{--<i class="fab fa-instagram-square"></i>--}}
                    <a class="link_foot" href="https://vk.com/anolit51"><i class="fab fa-vk"></i></a>
                    <i class="fab fa-whatsapp-square"></i>
                    <i class="fab fa-telegram-plane"></i>
                    <i class="fab fa-viber"></i>
                    {{--<i class="fab fa-twitter-square"></i>
                    <i class="fab fa-youtube-square"></i>--}}
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
