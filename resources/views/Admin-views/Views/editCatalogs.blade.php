@extends('Admin-views.Master.Admin')


@section('content')

<section class="content-header">
      <h1>
        Sửa Danh Mục "<b style="color: red">{{$edit->catalog_name}}</b>"
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="box-footer">
          <div class="col-md-4">
            <form action="" method="POST">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
            
      				<div class="form-group">
      					<label for="">Tên mới</label>
      					<input type="text" class="form-control" name="name" value="{{$edit->catalog_name}}" placeholder="Nhập tên danh mục mới...">
      				</div>
      				<div class="form-group">
      					<label for="">Status</label>
      					<input type="text" class="form-control" name="status" value="{{$edit->status}}" placeholder="Trạng thái sản phẩm...">
      				</div>
              <div class="form-group">
                <label for="">Parent(Cấp menu)</label>
                <input type="number" class="form-control" name="parent" value="{{$edit->parent}}" placeholder="Cấp menu">
              </div>
              <div class="form-group">
                <label for="">Nhóm menu cấp 1</label>
                <input type="number" class="form-control" name="group_menu1" value="{{$edit->group_menu1}}" placeholder="Nhóm menu cấp 1">
              </div>
              <div class="form-group">
                <label for="">Nhóm menu cấp 2</label>
                <input type="number" class="form-control" name="group_menu2" value="{{$edit->group_menu2}}" placeholder="Nhóm menu cấp 2">
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('catalogs')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@stop()