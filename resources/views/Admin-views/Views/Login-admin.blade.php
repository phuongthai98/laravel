
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang Quản Trị | Đăng nhập</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="icon" href="{{url('')}}/public/Admin/images/img_325769.png">
   <link rel="stylesheet" href="{{url('')}}/public/Admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('')}}/public/Admin/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('')}}/public/Admin/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('')}}/public/Admin/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('')}}/public/Admin/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('')}}/public/Admin/css/style.css" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b>cPanel</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to the Admin page</p>

    @if(Session::has('error'))
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('error') !!}
      </div>
    @endif
    <form action="" method="post">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if($errors->has('email'))
          {{$errors->first('email')}}
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
          {{$errors->first('password')}}
        @endif
      </div>
      <div class="row">
        <div class="col-xs-4">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <a href="{{route('home')}}" class="btn btn-primary pull-right">
            Back
          </a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>


</body>
</html>
