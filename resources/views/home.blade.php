@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/main_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/main_page_scripts.js') }}@endsection

@section('content')
    <div class="video_div">
        <a href="#">
            <iframe class="youtube_video" src="https://www.youtube.com/embed/0Xqmbv4Yc30?mute=1&cc_load_policy=0&iv_load_policy=3&disablekb=1&fs=0&controls=0&rel=0&showinfo=0&modestbranding=1&loop=1&autoplay=1&playlist=0Xqmbv4Yc30" title="Технобаттлы" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        <div class="to_hello_svg">
            <svg class="hello_on_tech" viewBox="0 0 1300 600">
                <symbol id="s-text">
                    <text text-anchor="middle"
                          x="50%"
                          y="35%"
                          class="text--line"
                    >
                        Добро пожаловать на
                    </text>
                    <text text-anchor="middle"
                          x="50%"
                          y="68%"
                          class="text--line2"
                    >Технобатлы 2020
                    </text>

                </symbol>

                <g class="g-ants">
                    <use xlink:href="#s-text"
                         class="text-copy"></use>
                    <use xlink:href="#s-text"
                         class="text-copy"></use>
                    <use xlink:href="#s-text"
                         class="text-copy"></use>
                    <use xlink:href="#s-text"
                         class="text-copy"></use>
                    <use xlink:href="#s-text"
                         class="text-copy"></use>
                </g>


            </svg>
        </div>
    </div>
    <div class="events">
        <svg class="svg_h_events" version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 900 100">

            <defs>

                <filter id="filter">
                    <feFlood flood-color="black" result="black" />
                    <feFlood flood-color="red" result="flood1" />
                    <feFlood flood-color="limegreen" result="flood2" />
                    <feOffset in="SourceGraphic" dx="3" dy="0" result="off1a"/>
                    <feOffset in="SourceGraphic" dx="2" dy="0" result="off1b"/>
                    <feOffset in="SourceGraphic" dx="-3" dy="0" result="off2a"/>
                    <feOffset in="SourceGraphic" dx="-2" dy="0" result="off2b"/>
                    <feComposite in="flood1" in2="off1a" operator="in"  result="comp1" />
                    <feComposite in="flood2" in2="off2a" operator="in" result="comp2" />

                    <feMerge x="0" width="100%" result="merge1">
                        <feMergeNode in = "black" />
                        <feMergeNode in = "comp1" />
                        <feMergeNode in = "off1b" />

                        <animate
                            attributeName="y"
                            id = "y"
                            dur ="4s"

                            values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6ßpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px'

                            keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                            repeatCount = "indefinite" />

                        <animate attributeName="height"
                                 id = "h"
                                 dur ="4s"

                                 values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px'

                                 keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                                 repeatCount = "indefinite" />
                    </feMerge>


                    <feMerge x="0" width="100%" y="60px" height="65px" result="merge2">
                        <feMergeNode in = "black" />
                        <feMergeNode in = "comp2" />
                        <feMergeNode in = "off2b" />

                        <animate attributeName="y"
                                 id = "y"
                                 dur ="4s"
                                 values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;'

                                 keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1'

                                 repeatCount = "indefinite" />

                        <animate attributeName="height"
                                 id = "h"
                                 dur = "4s"

                                 values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px'

                                 keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513;  1'

                                 repeatCount = "indefinite" />
                    </feMerge>

                    <feMerge>
                        <feMergeNode in="SourceGraphic" />

                        <feMergeNode in="merge1" />
                        <feMergeNode in="merge2" />

                    </feMerge>
                </filter>

            </defs>

            <g>
                <text class="fut_ev" x="110" y="80">События</text>

            </g>
        </svg>
        <div class="event_cont">

            @foreach($events as $event)

                <div class="example-1 card">
                <div class="wrapper" style="background: url({{$event->img}}) 30% 1%/cover no-repeat;
    transition: all .5s;">
                    <div class="date">
                        <span class="day">{{ $event->created_at->format('d') }}</span>
                        <span class="month">{{ mb_strimwidth($event->created_at->format('F'), 0, 3) }}</span>
                        <span class="year">{{ $event->created_at->format('Y') }}</span>
                    </div>
                    <div class="data">
                        <div class="content">
                            <h1 class="title"><a href="{{route('news.showw', ['id' => $event->id])}}">{{ $event->title }}</a></h1>
                            <p class="text">{{ mb_strimwidth(strip_tags($event->content), 0, 142,'...') }}</p>

                        </div>

                    </div>
                </div>
            </div>

            @endforeach
            <p></p>
        </div>
        {{--<a href="">
            <svg class="svg_h_events2" version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 900 100">

                <defs>

                    <filter id="filter">
                        <feFlood flood-color="black" result="black" />
                        <feFlood flood-color="red" result="flood1" />
                        <feFlood flood-color="limegreen" result="flood2" />
                        <feOffset in="SourceGraphic" dx="3" dy="0" result="off1a"/>
                        <feOffset in="SourceGraphic" dx="2" dy="0" result="off1b"/>
                        <feOffset in="SourceGraphic" dx="-3" dy="0" result="off2a"/>
                        <feOffset in="SourceGraphic" dx="-2" dy="0" result="off2b"/>
                        <feComposite in="flood1" in2="off1a" operator="in"  result="comp1" />
                        <feComposite in="flood2" in2="off2a" operator="in" result="comp2" />

                        <feMerge x="0" width="100%" result="merge1">
                            <feMergeNode in = "black" />
                            <feMergeNode in = "comp1" />
                            <feMergeNode in = "off1b" />

                            <animate
                                attributeName="y"
                                id = "y"
                                dur ="4s"

                                values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6ßpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px'

                                keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                                repeatCount = "indefinite" />

                            <animate attributeName="height"
                                     id = "h"
                                     dur ="4s"

                                     values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px'

                                     keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                                     repeatCount = "indefinite" />
                        </feMerge>


                        <feMerge x="0" width="100%" y="60px" height="65px" result="merge2">
                            <feMergeNode in = "black" />
                            <feMergeNode in = "comp2" />
                            <feMergeNode in = "off2b" />

                            <animate attributeName="y"
                                     id = "y"
                                     dur ="4s"
                                     values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;'

                                     keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1'

                                     repeatCount = "indefinite" />

                            <animate attributeName="height"
                                     id = "h"
                                     dur = "4s"

                                     values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px'

                                     keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513;  1'

                                     repeatCount = "indefinite" />
                        </feMerge>

                        <feMerge>
                            <feMergeNode in="SourceGraphic" />

                            <feMergeNode in="merge1" />
                            <feMergeNode in="merge2" />

                        </feMerge>
                    </filter>

                </defs>

                <g>
                    <text class="fut_ev" x="0" y="80">Записаться на события</text>

                </g>
            </svg>
        </a>--}}
    </div>
    <div class="to_be_aware">
        <div class="container">
            <div class="to_be_aware_form">
                <h2>Хотите быть в курсе наших событий?</h2>
                @error('email')
                <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                @if(session('success'))
                    <div class="success_feedback">{{ session('success') }}</div>
                @endif
                <form method="post" action="{{ route('home.store') }}">
                    @csrf
                    <input type="email" id="email" name="email" placeholder="Введите свою почту..." required="required" value="{{old('email')}}" class="@error('email') is_invalid @enderror"><br>

                    <button>Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="slider_to_gallery">

            <div class="slider" id="slider" >
                <div class="slider__content" id="slider-content">
                    <div class="slider__images">
                        <div class="slider__images-item slider__images-item--active" data-id="1"><img src="{{ asset('storage/images/techbattles_28_09_2021/large/img-3.jpg') }}"/></div>
                        <div class="slider__images-item" data-id="2"><img src="{{ asset('storage/images/techbattles_23_10_2021/large/img-42.jpg') }}"/></div>{{--37, 40, 42, 58, 85, 127, 160, 170, 174--}}{{--5, 17, 1, 3--}}
                        <div class="slider__images-item" data-id="3"><img src="{{ asset('storage/images/techbattles_28_09_2021/large/img-5.jpg') }}"/></div>
                        <div class="slider__images-item" data-id="4"><img src="{{ asset('storage/images/techbattles_23_10_2021/large/img-40.jpg') }}"/></div>
                        <div class="slider__images-item" data-id="5"><img src="{{ asset('storage/images/techbattles_28_09_2021/large/img-17.jpg') }}"/></div>
                    </div>
                    <div class="slider__text">
                        <div class="slider__text-item slider__text-item--active" data-id="1">
                            <div class="slider__text-item-head">
                                <h3>К. Вейерштрасс</h3>
                            </div>
                            <div class="slider__text-item-info">
                                <p>“Нельзя быть настоящим математиком, не будучи немного поэтом.”</p>
                            </div>
                        </div>
                        <div class="slider__text-item" data-id="2">
                            <div class="slider__text-item-head">
                                <h3>Жюль Верн</h3>
                            </div>
                            <div class="slider__text-item-info">
                                <p>“Придет время, когда наука опередит фантазию.”</p>
                            </div>
                        </div>
                        <div class="slider__text-item" data-id="3">
                            <div class="slider__text-item-head">
                                <h3>А. И. Герцен</h3>
                            </div>
                            <div class="slider__text-item-info">
                                <p>“Трудных наук нет, есть только трудные изложения.”</p>
                            </div>
                        </div>
                        <div class="slider__text-item" data-id="4">
                            <div class="slider__text-item-head">
                                <h3>В. И. Вернадский</h3>
                            </div>
                            <div class="slider__text-item-info">
                                <p>“Научная гипотеза всегда выходит за пределы фактов, послуживших основой для ее построения.”</p>
                            </div>
                        </div>
                        <div class="slider__text-item" data-id="5">
                            <div class="slider__text-item-head">
                                <h3>К. Гельвеций</h3>
                            </div>
                            <div class="slider__text-item-info">
                                <p>“Чтоб удивиться, достаточно одной минуты; чтобы сделать удивительную вещь, нужны многие годы”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__nav">
                    <div class="slider__nav-arrows">
                        <div class="slider__nav-arrow slider__nav-arrow--left" id="left">to left</div>
                        <div class="slider__nav-arrow slider__nav-arrow--right" id="right">to right</div>
                    </div>
                    <div class="slider__nav-dots" id="slider-dots">
                        <div class="slider__nav-dot slider__nav-dot--active" data-id="1"></div>
                        <div class="slider__nav-dot" data-id="2"></div>
                        <div class="slider__nav-dot" data-id="3"></div>
                        <div class="slider__nav-dot" data-id="4"></div>
                        <div class="slider__nav-dot" data-id="5"></div>
                    </div>
                </div>
            </div>

    </div>

    @endsection
