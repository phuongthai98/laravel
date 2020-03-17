@extends('Admin-views.Master.Admin')


@section('content')

<section class="content-header">
      <h1>
        Thêm Tài Khoản Người Dùng
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-md-4">
            @if(Session::has('error'))
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! Session::get('error') !!}
              </div>
            @endif
            @if(count($errors) > 0)
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Upload Validation Error<br>
                <ul>
                 @foreach($errors->all() as $error)
                  <li>
                    {{$error}}
                  </li>
                  @endforeach
                </ul>
              </div>
            @endif
            
            <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="">Tên tài khoản</label>
                <input type="text" class="form-control" name="user_name" placeholder="Nhập tên tài khoản của bạn...">
              </div>
              <div class="form-group">
                <label for="">Tên đầy đủ của bạn</label>
                <input type="text" class="form-control" name="full_name" placeholder="Nhập tên đầy đủ của bạn...">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Nhập email...">
              </div>
              <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu...">
              </div>
              <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ...">
              </div>
              <div class="form-group">
                <label for="">Your Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Nhập SĐT...">
              </div>
              <div class="form-group">
                <label>Avatar</label>
                <input type="file" class="form-control" name="upload" >
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('users')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@stop()