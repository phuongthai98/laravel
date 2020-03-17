@extends('Admin-views.Master.Admin')


@section('content')

<section class="content-header">
      <h1>
        Quản lý người dùng
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

        <div class="container-fluid">
          <div class="col-md-4">
            @if(Session::has('error'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!! Session::get('error') !!}
            </div>
            @endif
            <form action="" method="POST" enctype="multipart/form-data" >
              <legend>Thay đổi thông tin tài khoản</legend>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="">Tên tài khoản của bạn</label>
                <input type="text" class="form-control" name="user_name" value="{{$edit->user_name}}" placeholder="Nhập tên tài khoản của bạn...">
              </div>
              <div class="form-group">
                <label for="">Tên đầy đủ của bạn</label>
                <input type="text" class="form-control" name="full_name" value="{{$edit->full_name}}">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{$edit->email}}" placeholder="Nhập email...">
              </div>
              <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" name="pass"  placeholder="Nhập mật khẩu...">
              </div>
              <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" name="address" value="{{$edit->address}}" placeholder="Nhập địa chỉ...">
              </div>
              <div class="form-group">
                <label for="">Your Phone</label>
                <input type="number" class="form-control" name="phone" value="{{$edit->phone}}" placeholder="Nhập SĐT...">
              </div>
              <div class="form-group">
                <label>Avatar</label>
                <input type="file" class="form-control" name="upload" >
                @if($errors->has('upload'))
                  {{$errors->first('upload')}}
                @endif
                @if(!empty($edit->image))
                <img src="{{url('')}}/public/upload/avatar/{{$edit->image}}" width="50px" alt="">
                @else
                @endif
              </div>
              
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('users')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>

@stop()