@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/review_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/review_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')

@endsection

@section('content')
    <div class="review">

        <div class="cd-testimonials-wrapper cd-container">
            <ul class="cd-testimonials">
                @foreach($reviews as $review)
                    <li>
                        <p>{{ $review->message }}</p>
                        <div class="cd-author">
                            <img src="{{ asset('storage/'.$review->avatar) }}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>{{ $review->author }}</li>
                                <li><pre>{{ $review->job }}</pre></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul> <!-- cd-testimonials -->

            <a href="#0" class="cd-see-all">Читать все</a>
        </div> <!-- cd-testimonials-wrapper -->

        <div class="cd-testimonials-all">
            <div class="cd-testimonials-all-wrapper">
                <ul>
                    @foreach($reviews as $review)
                        <li class="cd-testimonials-item">
                            <p>{{ $review->message }}</p>

                            <div class="cd-author">
                                <img src="{{ asset('storage/'.$review->avatar) }}" alt="Изображение автора">
                                <ul class="cd-author-info">
                                    <li>{{ $review->author }}</li>
                                    <li>{{ $review->job }}</li>
                                </ul>
                            </div> <!-- cd-author -->
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="#0" class="close-btn">Close</a>
    </div>
        <div class="container">
            @include('layouts.alerts')
        </div>
    <div class="form_feedback">
        <form class="decor" method="post" action="{{ route('review.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h3>Оставить отзыв</h3>
                <label for="author">Имя</label>
                <input type="text" placeholder="Ваше имя" id="author" name="author" value="{{old('author')}}" class="@error('author') is_invalid @enderror">
                @error('author')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                <label for="job">Место работы</label>
                <input type="text" placeholder="Ваше место работы" id="job" name="job" value="{{old('job')}}" class="@error('job') is_invalid @enderror">
                @error('job')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                <label for="avatar">Ваш аватар</label>
                <input type="file" id="avatar" name="avatar"  placeholder="Ваш аватар" value="{{old('avatar')}}" class="@error('avatar') is_invalid @enderror">
                @error('avatar')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                <label for="message">Отзыв</label>
                <textarea placeholder="Сообщение..." rows="3" id="message" name="message" class="@error('message') is_invalid @enderror">{{old('message')}}</textarea>
                @error('message')
                    <div class="invalid_feedback">{{ $message }}</div>
                @enderror
                <div class="captcha_img">
                    <span id="captcha-img">
                       {!! captcha_img() !!}
                    </span>
                    <button id="reload"><i class="fas fa-redo"></i></button>
                </div>
                <div>
                    <input type="text" name="captcha" placeholder="Введите сумму двух чисел" value="{{old('captcha')}}" class="@error('message') is_invalid @enderror">
                    @error('captcha')
                    <div class="invalid_feedback">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>



@endsection
