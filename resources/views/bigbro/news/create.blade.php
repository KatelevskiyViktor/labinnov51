@extends('bigbro.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
         {{--   <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новая новость</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
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
                            <h3 class="card-title">Новая новость</h3>
                        </div>

                        <form role="form" method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="author">Автор</label>
                                    <input type="text" name="author"
                                           class="form-control @error('author') is-invalid @enderror"
                                           id="author"
                                           placeholder="Кто автор"
                                           value="{{old('author')}}">
                                </div>

                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror"
                                           id="title"
                                           placeholder="Заголовок"
                                           value="{{old('title')}}">
                                </div>

                                <div class="form-group">
                                    <label for="under_title">Подзаголовок</label>
                                    <input type="text" name="under_title"
                                           class="form-control @error('under_title') is-invalid @enderror"
                                           id="under_title"
                                           placeholder="Подзаголовок"
                                           value="{{old('under_title')}}">
                                </div>


                                <div class="form-group">
                                    <label for="content">Сообщение</label>
                                    <textarea name="content"
                                              class="form-control @error('content') is-invalid @enderror"
                                              id="content"
                                              placeholder="Основной контент...">{{old('content')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="created_at">Дата и время события \ новости</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control @error('content') is-invalid @enderror"
                                            data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="yyyy-mm-dd HH:MM:ss"
                                            name="created_at"
                                            id="created_at"
                                            placeholder="год-месяц-день час:минуты:секунда" data-mask="" im-insert="false">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="event" name="event">
                                        <label class="custom-control-label" for="event">Это событие?</label>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="img">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img" class="custom-file-input" id="img">
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
