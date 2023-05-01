


@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/one_news_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/one_news_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')
@endsection

@section('content')

    <div class="news">
        <div class="container">
            <div class="blog-card2">
                <div class="meta">
                    <div class="photo" style="background-image: url({{ asset($news->img) }})"></div>
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
                    <p style="white-space: pre-wrap;">{!! $news->content !!}</p>
                </div>
            </div>
        </div>

    </div>


@endsection
