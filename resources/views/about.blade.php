@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/about_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/about_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')

@endsection

@section('content')
    <div class="about">
        <div class="up_block_about">
            <div class="description">
                <h1>{{$title}}</h1>
                <p>Автономная некоммерческая организация содействия развитию и популяризации науки и техники "Лаборатория инновационного творчества, г. Мурманск</p>
            </div>
            <div class="img_place">
            </div>
        </div>
        <hr color="#247621" size="4" width="700">
        <hr color="#fd7020" size="4" width="700">
        <div class="down_block_about">
            <div class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aea1be20436ff1b541f11543d3a3d28e10b53e9cb8c8a4366f5aa53c39bffc436&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
            <div class="contact">
                    <a href="tel:+79113111830"><i class="fas fa-phone-square-alt"></i> +7 (911) 311-18-30</a>
                    <br>
                    <a href="https://yandex.ru/maps/23/murmansk/?ll=33.087521%2C68.969632&mode=poi&poi%5Bpoint%5D=33.087358%2C68.969746&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D70994139020&z=19.83" target="blank"><i class="fas fa-map-marker-alt"></i> ул. Софьи Перовской, 21А, Мурманск, Мурманская обл., 183038</a>
            </div>
        </div>


    </div>
@endsection
