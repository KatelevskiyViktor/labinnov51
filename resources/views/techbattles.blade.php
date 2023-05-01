
@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/techbattles_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/techbattles_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')

<div class="news">
    <div class="container">
        @foreach($techbattles as $techbattle)

        <div class="blog-card2">
            <div class="meta">
                <div class="photo" style="background-image: url({{ asset('storage/'.$techbattle->img) }})"></div>
            </div>
            <div class="description">
                <h1><a name="aboutus">{{ $techbattle->title }}</a></h1>
                <p style="white-space: pre-wrap;"> {!! $techbattle->about_content !!} </p>
            </div>
            <div class="description">
                <h2><a name="ourp">Наши партнёры</a></h2>

                {{--<p> {{ $techbattle->our_partners}}</p>--}}
                <p>
                    <div class="partners">
                            <img src="storage/images/icae.jpg" alt="ИЦАЭ">
                            <img src="storage/images/focus.jpg" alt="Фокус. Музей занимательных наук.">
                            <img src="storage/images/library.jpg" alt="Областная научная библиотека">
                            <img src="storage/images/president_grant.jpg" alt="Фонд президентских грантов">
                            <img src="storage/images/min_obr.jpg" alt="Министерство образования и науки Мурманской области">
                    </div>
                </p>
            </div>

            {{--<div class="description">
                <h2>Задать вопрос</h2>
                <p> {{ $techbattle->question}}</p>
            </div>--}}
            <div class="description">
                <h2><a name="methrec"></a>Методический рекомендации</h2>
                <p style="white-space: pre-wrap;">{!! $techbattle->meth_recom !!} </p>
            </div>
        </div>
                    @endforeach

                        <div class="news_pagination">
                            {{ $techbattles->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
                        </div>

    </div>

</div>


@endsection

