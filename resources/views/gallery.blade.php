@extends('layouts.layout')

@section('title')@parent{{ $title }} @endsection
@section('css_link'){{ asset('css/gallery_page_styles.css') }}@endsection
@section('scripts_link'){{ asset('js/gallery_page_scripts.js') }}@endsection
@section('individual_scripts_and_styles')

@endsection

@section('content')


    <div class="gall_block">
        <div id="gallery">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            @foreach($albums as $album)
                let {{"items".$i}} = [];
                for (let i = 1; i <= {{ $album->count_ph }}; i++) {
                    {{"items".$i}}.push({
                        url: 'storage/images/{{ $album->name_alb_en }}/large/img-' + i + '.jpg',
                        thumbUrl: 'storage/images/{{ $album->name_alb_en }}/thumbs/img-' + i + '.jpg',
                        title: 'Фото ' + i,
                        hash: 'photo-' + i
                    })
                }
            <?php $i++; ?>
            @endforeach
            <?php $i = 0; ?>
            document.querySelector('#gallery').appendChild(JGallery.create([

                @foreach($albums as $album)
                    {
                        title: '{{ $album->name_alb }}',
                        items: {{ 'items'.$i }}

                    },
                    <?php $i++;?>
                @endforeach
                    <?php
                        $temp = [];
                        $i = 1;
                    ?>
                        @foreach($videos as $video)
                            <?php $temp[] = $video->title_alb; ?>
                        @endforeach
                            <?php $temp = array_unique($temp); ?>
                        @foreach($temp as $t)
                                {
                                    title: '{{ $t }}',
                                    items: [

                                   @for($j = 0; $j < count($videos); $j++)
                                        @if($t === $videos[$j]->title_alb)
                                           {
                                                    element: JGallery.createElement('{!! $videos[$j]->video !!}' ),
                                                    thumbElement: JGallery.createElement('<span>{{ $i }}</span>'),
                                                    title: '{{ $videos[$j]->title_vid }}',
                                                    hash: '{{'video'.$j}}'
                                                <?php $i++;?>
                                            },
                                       @endif
                                   @endfor
                                        <?php $i = 1;?>
                                    ]},
                        @endforeach

                ],{
                "tooltipChangeSize": 'Изменить размер',
                "tooltipSlideShowStart": 'Запустить слайдшоу',
                "tooltipThumbnailsToggle": 'Убрать миниатюры',
                "tooltipSeeAllItems": 'Посмотреть все',
                "tooltipSeeOtherAlbums": 'Посмотреть все альбомы'
            }).getElement());

            $('div.j-gallery-controls').css('z-index', '3');
        });

    </script>

@endsection
