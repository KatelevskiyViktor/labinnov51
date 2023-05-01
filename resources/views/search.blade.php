
@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/search_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/search_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')

    <div class="news search_news">
        <div class="container">
            @if($newws->count())
                <h2 class="h_search">Результат поиска по запросу: "{{ $s }}". В разделе Новости.</h2>
                @foreach($newws as $news)
                    <?php $i++?>
                    @if($i % 2 != 0)
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url({{ $news->img }})"></div>
                                <ul class="details">
                                    <li class="author"><a href="#">{{ $news->author }}</a></li>
                                    <li class="date">{{ $news->created_at/*->format('d.m.Y')*/ }}</li>
                                    {{--<li class="tags">
                                        <ul>
                                            <li><a href="#">Learn</a></li>
                                            <li><a href="#">Code</a></li>
                                            <li><a href="#">HTML</a></li>
                                            <li><a href="#">CSS</a></li>
                                        </ul>
                                    </li>--}}
                                </ul>
                            </div>
                            <div class="description">
                                <h1>{{ $news->title }}</h1>
                                <h2>{{ $news->under_title }}</h2>
                                <p> {{ mb_strimwidth($news->content, 0, 181,'...') }}</p>
                                <p class="read-more">
                                    <a href="{{route('news.showw', ['id' => $news->id])}}">Подробнее</a>
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="blog-card alt">
                            <div class="meta">
                                <div class="photo" style="background-image: url({{ $news->img }})"></div>
                                <ul class="details">
                                    <li class="author"><a href="#">{{ $news->author }}</a></li>
                                    <li class="date">{{ $news->created_at/*->format('d.m.Y')*/ }}</li>
                                    {{--<li class="tags">
                                        <ul>
                                            <li><a href="#">Learn</a></li>
                                            <li><a href="#">Code</a></li>
                                            <li><a href="#">JavaScript</a></li>
                                        </ul>
                                    </li>--}}
                                </ul>
                            </div>
                            <div class="description">
                                <h1>{{ $news->title }}</h1>
                                <h2>{{ $news->under_title }}</h2>
                                <p>{{ mb_strimwidth($news->content, 0, 181,'...') }}</p>
                                <p class="read-more">
                                    <a href="{{route('news.showw', ['id' => $news->id])}}">Подробнее</a>
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach

                <div class="news_pagination">
                    {{$newws->appends(['s' => $s, 'paget' => $_GET['paget'] ?? 1])->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
                </div>
                @else
                    По вашему запросу ничего не найдено
                @endif
        </div>

        <br>
        <div class="container">
            <h2 class="h_search">Результат поиска по запросу: "{{ $s }}". В разделе Технобаттлы.</h2>
        <br>
        @foreach($techbattles as $techbattle)

                <div class="blog-card2">
                    <div class="meta">
                        <div class="photo" style="background-image:url({{ asset('storage/'.$techbattle->img) }})"></div>
                    </div>
                    <div class="description">
                        <h1>{{ $techbattle->title }}</h1>
                        <p> {{ $techbattle->about_content }}</p>
                    </div>
                    <div class="description">
                        <h1>Наши партнёры</h1>
                        <div class="partners">
                            <img src="storage/images/icae.jpg" alt="ИЦАЭ">
                            <img src="storage/images/focus.jpg" alt="Фокус. Музей занимательных наук.">
                            <img src="storage/images/library.jpg" alt="Областная научная библиотека">
                            <img src="storage/images/president_grant.jpg" alt="Фонд президентских грантов">
                            <img src="storage/images/min_obr.jpg" alt="Министерство образования и науки Мурманской области">
                        </div>
                        {{--<p> {{ $techbattle->our_partners}}</p>--}}
                    </div>
                    <div class="description">
                        <h1>Задать вопрос</h1>
                        <p> {{ $techbattle->question}}</p>
                    </div>
                    <div class="description">
                        <h1>Методический рекомендации</h1>
                        <p style="white-space: pre-wrap;">{!! $techbattle->meth_recom !!}</p>
                    </div>
                </div>
            @endforeach

            <div class="news_pagination">
                {{ $techbattles->appends(['s' => $s, 'pagen' => $_GET['pagen'] ?? 1])->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>

    </div>



@endsection
