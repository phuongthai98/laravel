@extends('Admin-views.Master.Admin')
@section('content')
    <!-- Content Header (Page header) -->
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
       <!--  @if(Session::has('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! Session::get('success') !!}
        </div>
        @endif -->
        <form action="{{route('searchUsers')}}" method="POST" class="form-inline" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm...">
          </div>
          
          <button type="submit" class="btn btn-primary">Tìm Tài Khoản</button>
          <a href="{{route('addUser')}}" type="submit" class="btn btn-primary">Thêm mới</a>
        </form>
        <div class="box-body">
          <div class="table-responsive">
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên tài khoản</th>
                  <th>Tên đầy đủ</th>
                  <th>Avatar</th>
                  <th>Email</th>
                  <th>Mật khẩu</th>
                  <th>Phone</th>
                  <th>Địa chỉ</th>
                  <th>Ngày tạo</th>
                  <th>Ngày sửa</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $users)
                 <tr>
                  <td>{{$users->id}}</td>
                  <td>{{$users->user_name}}</td>
                  <td>{{$users->full_name}}</td>
                  <td>
                    <img src="{{url('')}}/public/upload/avatar/{{$users->image}}" width="50px" alt="">
                  </td>
                  <td>{{$users->email}}</td>
                  <td>{{$users->password}}</td>
                  <td>{{$users->phone}}</td>
                  <td>{{$users->address}}</td>
                  <td>{{$users->created_at}}</td>
                  <td>{{$users->update_at}}</td>
                  <td>
                    <a href="{{route('editUser',$users->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{route('delUser',$users->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <div class="clearfix">
              {{$user->links()}}
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@stop()