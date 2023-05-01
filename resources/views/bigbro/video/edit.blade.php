@extends('bigbro.layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование видео</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Видео :: "{{ $video->title_vid }}"</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('video.update', ['video' => $video->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title_alb">Название альбома видео</label>
                                    <input type="text" name="title_alb"
                                           class="form-control @error('title_alb') is-invalid @enderror"
                                           id="title_alb"
                                           placeholder="Пример: Технобаттлы - 2020 / Финал / 20.11.2021"
                                           value="{{$video->title_alb}}">
                                </div>

                                <div class="form-group">
                                    <label for="title_vid">Название альбома на английском</label>
                                    <input type="text" name="title_vid"
                                           class="form-control @error('title_vid') is-invalid @enderror"
                                           id="title_vid"
                                           placeholder="Пример: Приветствие"
                                           value="{{ $video->title_vid }}">
                                </div>

                                <div class="form-group">
                                    <label for="video">Количество фото в альбоме</label>
                                    <input type="text" name="video"
                                           class="form-control @error('video') is-invalid @enderror"
                                           id="video"
                                           placeholder="Сколько фото в альбоме"
                                           value="{{ $video->video }}">
                                </div>



                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn-primary btn">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                var button2 = document.getElementById( 'ckfinder-modal' );


                button2.onclick = function() {
                    selectFileWithCKFinder( 'ckfinder-modal' );
                };

                function selectFileWithCKFinder( elementId ) {
                    CKFinder.modal( {
                        chooseFiles: true,
                        width: 800,
                        height: 600,
                        onInit: function( finder ) {
                            finder.on( 'files:choose', function( evt ) {
                                var file = evt.data.files.first();
                                var output = document.getElementById( elementId );
                                output.value = file.getUrl();
                            } );

                            finder.on( 'file:choose:resizedImage', function( evt ) {
                                var output = document.getElementById( elementId );
                                output.value = evt.data.resizedUrl;
                            } );
                        }
                    } );
                }

            </script>
        </div>
    </section>
    <!-- /.content -->
@endsection
