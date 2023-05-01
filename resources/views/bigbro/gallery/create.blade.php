@extends('bigbro.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                {{--<div class="col-sm-6">
                    <h1>Новый альбом</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>--}}
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
                            <h3 class="card-title">Новый альбом</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name_alb">Название альбома</label>
                                    <input type="text" name="name_alb"
                                           class="form-control @error('name_alb') is-invalid @enderror"
                                           id="name_alb"
                                           placeholder="Пример: Технобаттлы - 2020 / Финал / 20.11.2021"
                                           value="{{old('name_alb')}}">
                                </div>

                                <div class="form-group">
                                    <label for="name_alb_en">Название альбома на английском</label>
                                    <input type="text" name="name_alb_en"
                                           class="form-control @error('name_alb_en') is-invalid @enderror"
                                           id="name_alb_en"
                                           placeholder="Пример: techbattles_20_11_2021"
                                           value="{{old('name_alb_en')}}">
                                </div>

                                <div class="form-group">
                                    <label for="count_ph">Количество фото в альбоме</label>
                                    <input type="text" name="count_ph"
                                           class="form-control @error('count_ph') is-invalid @enderror"
                                           id="count_ph"
                                           placeholder="Сколько будет фото в альбоме"
                                           value="{{old('count_ph')}}">
                                </div>


                                <div class="form-group">
                                    <label for="img">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img[]" class="custom-file-input" id="img" multiple>
                                            <label class="custom-file-label" for="img">Выберите изображение</label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn-primary btn">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
