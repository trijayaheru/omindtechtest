<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store | Log in</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {!! Html::style(asset('assets/plugins/fontawesome-free/css/all.min.css')) !!}
    <!-- icheck bootstrap -->
    {!! Html::style(asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')) !!}
    <!-- Theme style -->
    {!! Html::style(asset('assets/css/adminlte.min.css')) !!}
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>Book Store</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            {!! Form::open(['route' => 'validate_login', 'method' => 'post']) !!}
                @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ Session::get('message', '') }}
                </div>
                @endif
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
{!! Html::script(asset('assets/plugins/jquery/jquery.min.js')) !!}
<!-- Bootstrap 4 -->
{!! Html::script(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')) !!}
<!-- AdminLTE App -->
{!! Html::script(asset('assets/js/adminlte.min.js')) !!}
</body>
</html>
