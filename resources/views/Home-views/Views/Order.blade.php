@extends('Home-views.Master.Home')


@section('content')
	<div class="container">
		
		<div class="row">
			@if(Session::has('error'))
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				
				{!! Session::get('error') !!}
			</div>
			@endif

			<div class="col-md-4">
				<form action="" method="POST" role="form">
					<legend>Thông tin đặt hàng</legend>
				@csrf

				@if(isset(Auth::guard('cus')->user()->email))
					<div class="form-group">
						<label for="">Tên đầy đủ</label>
						<input type="text" class="form-control" name="full_name" value="{{Auth::guard('cus')->user()->full_name}}" placeholder="Your name" required="">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" value="{{Auth::guard('cus')->user()->address}}" placeholder="Your address" required="">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" value="{{Auth::guard('cus')->user()->phone}}" placeholder="Your phone number" required="">
					</div>
					<div class="form-group">
						<label for="">Ghi chú</label>
						<textarea name="order_note" id="input" class="form-control" rows="3" placeholder="Text here ..."></textarea>
					</div>

				@else
				
					<div class="form-group">
						<label for="">Tên đầy đủ</label>
						<input type="text" class="form-control" name="full_name" placeholder="Your name" required="">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" placeholder="Your address" required="">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" placeholder="Your phone number" required="">
					</div>
					<div class="form-group">
						<label for="">Ghi chú</label>
						<textarea name="order_note" id="input" class="form-control" rows="3" placeholder="Text here ..."></textarea>
					</div>
				@endif

					<a href="{{route('cart')}}" class="btn btn-primary pull-left">Quay lại giỏ hàng</a>
					<button type="submit" class="btn btn-primary pull-right">Xác nhận</button>
				</form>
			</div>

			<div class="col-md-8">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($cart->items as $k => $item)
								<tr>
									<td><img width="60px" src="{{url('')}}/public/upload/products/{{$item['image']}}" alt="Cart"/></td>
									<td>{{$item['name']}}</td>
									<td>{{number_format($item['price'])}} VNĐ</td>
									<td>{{$item['quantity']}}</td>
								</tr>
							@endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop