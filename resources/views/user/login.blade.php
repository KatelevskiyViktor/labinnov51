<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Авторизация</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bigbro/css/bigbro_page_styles.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>Авторизация</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Эл.почта" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль" value="{{ old('password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-7 offset-5">
                        <button type="submit" class="btn btn-primary btn-block">Авторизоваться</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{ asset('bigbro/js/bigbro_page_scripts.js') }}"></script>
</body>
</html>

