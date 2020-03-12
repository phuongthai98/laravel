@extends('Admin-views.Master.Admin')


@section('content')

<section class="content-header">
      <h1>
        Thêm Sản Phẩm
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
           
            <form action="" method="POST" role="form"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="">Nhập tên thay thế</label>
                <input type="text" class="form-control" name="name" value="{{$edit->product_name}}" placeholder="Nhập tên sản phẩm..." >
              </div>
              <div class="form-group">
                <label for="">Chọn Danh mục (Không bắt buộc)</label>
                <select name="catalog_id" class="form-control" >
                  <option value="">Danh Mục</option>
                  @foreach($cat as $v)
                    <option value="{{$v->id}}">{{$v->catalog_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="">Giá</label>
                <input type="number" class="form-control" name="price" value="{{$edit->price}}" placeholder="Nhập giá sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Giá KM</label>
                <input type="number" class="form-control" name="sale_price" value="{{$edit->sale_price}}" placeholder="Nhập giá sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Nội dung sản phẩm(Không bắt buộc)</label>
                <input type="text" class="form-control" name="content" value="{{$edit->content}}" placeholder="Nhập ND sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Mô tả(Không bắt buộc)</label>
                <input type="text" class="form-control" name="description" value="{{$edit->description}}" placeholder="Mô Tả...">
              </div>
              <div class="form-group">
                <label>Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="upload" >
                <img src="{{url('')}}/public/upload/products/{{$edit->image}}" width="60px" alt="">
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="{{route('products')}}" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@stop()