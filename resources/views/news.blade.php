
@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/news_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/news_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')

   <div class="news">
       @foreach($newws as $news)
               <?php $i++?>
                @if($i % 2 != 0)
                    <div class="blog-card">
                   <div class="meta">
                       <div class="photo" style="background-image: url({{ asset($news->img) }})"></div>
                       <ul class="details">
                           <li class="author">{{ $news->author }}</li>
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
                       <p> {{ strip_tags(mb_strimwidth($news->content, 0, 181,'...')) }}</p>
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
                       <p>{{ strip_tags(mb_strimwidth($news->content, 0, 181,'...')) }}</p>
                       <p class="read-more">
                           <a href="{{route('news.showw', ['id' => $news->id])}}">Подробнее</a>
                       </p>
                   </div>
               </div>
                @endif
           @endforeach
           <div class="container">
               <div class="news_pagination">
                   {{$newws->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
               </div>
           </div>

   </div>



@endsection
