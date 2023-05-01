@extends('bigbro.layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          {{--  <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование галереи</h1>
                </div>

            </div>--}}
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Альбом :: "{{ $album->name_alb }}"</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('gallery.update', ['gallery' => $album->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name_alb">Название альбома</label>
                                    <input type="text" name="name_alb"
                                           class="form-control @error('name_alb') is-invalid @enderror"
                                           id="name_alb"
                                           placeholder="Пример: Технобаттлы - 2020 / Финал / 20.11.2021"
                                           value="{{$album->name_alb}}">
                                </div>

                                <div class="form-group">
                                    <label for="name_alb_en">Название альбома на английском</label>
                                    <input type="text" name="name_alb_en"
                                           class="form-control @error('name_alb_en') is-invalid @enderror"
                                           id="name_alb_en"
                                           placeholder="Пример: techbattles_20_11_2021"
                                           value="{{ $album->name_alb_en }}">
                                </div>

                                <div class="form-group">
                                    <label for="count_ph">Количество фото в альбоме</label>
                                    <input type="text" name="count_ph"
                                           class="form-control @error('count_ph') is-invalid @enderror"
                                           id="count_ph"
                                           placeholder="Сколько фото в альбоме"
                                           value="{{ $album->count_ph }}">
                                </div>


                                <div class="form-group">
                                    <label for="content">Редактирование галареи</label>
                                    <div class="modal-example">
                                        <span  id="ckfinder-modal" class="btn btn-info" style="float: left">Галерея</span>
                                        <div id="output" style="float: left;font-size: 0.8em;line-height: 1.4em;margin: 3px 7px;"></div>
                                    </div>
                                </div>


                               {{-- <div class="form-group">
                                    <label for="img">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img" class="custom-file-input" id="img">
                                            <label class="custom-file-label" for="img">Выберите изображение</label>
                                        </div>
                                    </div>
                                    <div><img class="img-thumbnail mt-2" width="200" src="{{ $news->getImage() }}"></div>
                                </div>--}}


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
