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
                            <h3 class="card-title">Новое видео</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title_alb">Название альбома</label>
                                    <input type="text" name="title_alb"
                                           class="form-control @error('title_alb') is-invalid @enderror"
                                           id="title_alb"
                                           placeholder="Пример: Видео Технобаттлы 2020"
                                           value="{{old('title_alb')}}">
                                </div>

                                <div class="form-group">
                                    <label for="title_vid">Название  видео</label>
                                    <input type="text" name="title_vid"
                                           class="form-control @error('title_vid') is-invalid @enderror"
                                           id="title_vid"
                                           placeholder="Пример: Приветствие"
                                           value="{{old('title_vid')}}">
                                </div>

                                <div class="form-group">
                                    <label for="video">Видео</label>
                                    <input type="text" name="video"
                                           class="form-control @error('video') is-invalid @enderror"
                                           id="video"
                                           placeholder="Пример: <iframe></iframe>"
                                           value="{{old('video')}}">
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
