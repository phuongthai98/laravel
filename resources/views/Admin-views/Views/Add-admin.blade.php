@extends('Admin-views.Master.Admin')

@section('content')
	<section class="content-header">
      <h1>
        Thêm Tài khoản Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-md-4">
          	@if(Session::has('success'))
          	<div class="alert alert-success">
          		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          		{!! Session::get('success') !!}
          	</div>
          	@endif
          	@if(Session::has('error'))
          	<div class="alert alert-danger">
          		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          		{!! Session::get('error') !!}
          	</div>
          	@endif
            <form action="" method="POST" role="form"  enctype="multipart/form-data">
            
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="">Tên đầy đủ</label>
                <input type="text" class="form-control" name="full_name" >
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" name="password">
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('admin')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@stop()