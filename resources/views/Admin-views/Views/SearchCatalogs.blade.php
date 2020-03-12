@extends('Admin-views.Master.Admin')
@section('content')
  <!-- =============================================== -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục
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
        <form action="" method="post" class="form-inline" role="form">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm...">
          </div>
          
          <button type="submit" class="btn btn-primary">Tìm</button>
          <a href="{{route('addCat')}}" type="submit" class="btn btn-primary">Thêm mới</a>
        </form>
        <h4>Kết quả tìm kiếm: "{{$key}}"</h4>
        <div class="box-body">
          <div class="table-responsive">

           @if(Session::has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!! Session::get('success') !!}
            </div>
           @endif
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên danh mục</th>
                  <th>Status</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cat as $cats)
                <tr>
                  <td>{{$cats->id}}</td>
                  <td>{{$cats->catalog_name}}</td>
                  <td>{{$cats->status}}</td>
                  <td>
                    <a href="{{route('editCat',$cats->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{route('delCat',$cats->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="clearfix">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
@stop()