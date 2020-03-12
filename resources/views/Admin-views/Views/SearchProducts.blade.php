@extends('Admin-views.Master.Admin')
@section('content')
  <!-- =============================================== -->

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý sản phẩm
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
        @if(Session::has('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! Session::get('success')!!}
        </div>
        @endif
        <form action="{{'searchPro'}}" method="POST" class="form-inline" role="form">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label class="sr-only" for="">label</label>
            <input type="text" class="form-control" name="search" placeholder="Tìm kiếm...">
          </div>
          
          <button type="submit" class="btn btn-primary">Tìm</button>
          <a href="{{route('addPro')}}" type="submit" class="btn btn-primary">Thêm mới</a>
        </form>
        <h4>Kết quả tìm kiếm: "{{$key}}"</h4>
        <div class="box-body">
          <div class="table-responsive">
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Mã DM</th>
                  <th>Size</th>
                  <th>Màu</th>
                  <th>Giá</th>
                  <th>Giá KM</th>
                  <th>Nội dung sản phẩm</th>
                  <th>Ảnh</th>
                  <th>Môt tả</th>
                  <th>Ngày tạo</th>
                  <th>Ngày Sửa</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pro as $pros)
                <tr>
                  <td>{{$pros->id}}</td>
                  <td>{{$pros->product_name}}</td>
                  <td>{{$pros->catalog_id}}</td>
                  <td>{{$pros->size}}</td>
                  <td>{{$pros->color}}</td>
                  <td>{{number_format($pros->price)}}</td>
                  <td>{{number_format($pros->sale_price)}}</td>
                  <td>{{$pros->content}}</td>
                  <td>
                    <img src="public/upload/products/{{$pros->image}}" width="60px" alt="">
                  </td>
                  <td>{{$pros->description}}</td>
                  <td>{{$pros->created_at}}</td>
                  <td>{{$pros->updated_at}}</td>
                  <td>
                    <a href="{{route('editPro',$pros->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="{{route('delPro',$pros->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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

@stop()