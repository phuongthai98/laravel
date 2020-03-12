@extends('Admin-views.Master.Admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý Banner
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
        <!-- @if(Session::has('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!!Session::get('success')!!}
        </div>
        @endif -->
        <form action="{{route('searchBan')}}" method="POST" class="form-inline" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm...">
          </div>
          
          <button type="submit" class="btn btn-primary">Tìm</button>
          <a href="{{route('addBan')}}" type="submit" class="btn btn-primary">Thêm mới</a>
        </form>
        <div class="box-body">
          <div class="table-responsive">
           
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Ảnh</th>
                  <th>Status</th>
                  <th>Type</th>
                  <th>Ngày tạo</th>
                  <th>Ngày sửa</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ban as $bann)
                <tr>
                  <td>{{$bann->id}}</td>
                  <td>
                    <img src="{{url('')}}/public/upload/banner/{{$bann->image}}" width="60px" alt="">
                  </td>
                  <td>{{$bann->status}}</td>
                  <td>{{$bann->type}}</td>
                  <td>{{$bann->created_time}}</td>
                  <td>{{$bann->modifine_time}}</td>
                  <td>
                    <a href="{{route('editBan',$bann->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{route('delBan',$bann->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <div class="clearfix">
              {{$ban->links()}}
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@stop()