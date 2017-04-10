
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/bower_components/AdminLTE/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />

        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  {{--{!! csrf_field() !!}--}}
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ asset('admin')}}"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ url('login/login') }}" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="username" placeholder="username" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> 记住我
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>

            </div><!-- /.col -->
          </div>
        </form>
        <a href="#">忘记密码</a><br>
        <a href="{{ url('/register') }}" class="text-center">注册</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js')}}"></script>
    <!-- {{ asset('/bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}} -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('/bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    {{--<script>--}}
      {{--$(function () {--}}
        {{--$('input').iCheck({--}}
          {{--checkboxClass: 'icheckbox_square-blue',--}}
          {{--radioClass: 'iradio_square-blue',--}}
          {{--increaseArea: '20%' // optional--}}
        {{--});--}}
      {{--});--}}
    {{--</script>--}}
  </body>
</html>
