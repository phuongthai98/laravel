@extends('Admin-views.Master.Admin')


@section('content')

<section class="content-header">
      <h1>
        Thêm Banner Quảng Cáo
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
            <form action="" method="POST" role="form"  enctype="multipart/form-data">
            
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label>Ảnh Banner</label>
                <input type="file" class="form-control" name="upload">
              </div>
              <div class="form-group">
                <label for="">Status</label>
                <input type="number" class="form-control" name="status" >
              </div>
              <div class="form-group">
                <label for="">Type</label>
                <input type="number" class="form-control" name="type">
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('banner')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@stop()