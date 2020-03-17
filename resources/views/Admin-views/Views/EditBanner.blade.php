@extends('Admin-views.Master.Admin')


@section('content')

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

        <div class="container-fluid">
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
            <form action="" method="POST" role="form" enctype="multipart/form-data">
              <legend>Chỉnh sửa banner</legend>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            
              <div class="form-group">
                <label for="">Status</label>
                <input type="number" class="form-control" name="status" value="{{$ban->status}}">
              </div>
              <div class="form-group">
                <label for="">Type</label>
                <input type="number" class="form-control" name="type" value="{{$ban->type}}">
              </div>
              <div class="form-group">
                <label for="">Ảnh banner</label>
                <input type="file" class="form-control" name="upload">
                <img src="{{url('')}}/public/upload/banner/{{$ban->banner_image}}" width="60px" alt="">
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('banner')}}" class="btn btn-danger">Hủy bỏ</a>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>

@stop()