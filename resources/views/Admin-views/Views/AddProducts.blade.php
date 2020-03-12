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
           
            <form action="{{route('post_addPro')}}" method="POST" role="form"  enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label for="">Nhập tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm..." >
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
                <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Giá KM</label>
                <input type="number" class="form-control" name="sale_price" placeholder="Nhập giá sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Nội dung sản phẩm(Không bắt buộc)</label>
                <input type="text" class="form-control" name="content" placeholder="Nhập ND sản phẩm...">
              </div>
              <div class="form-group">
                <label for="">Mô tả(Không bắt buộc)</label>
                <input type="text" class="form-control" name="description" placeholder="Mô Tả...">
              </div>
              <div class="form-group">
                <label>Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="upload" >
              </div>
            
              <button type="submit" class="btn btn-primary">Xác nhận</button>
              <a href="products.php" class="btn btn-primary">Quay lại</a>
            </form>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

@stop()